<?php

namespace App\Http\Livewire\Score;

use App\Models\Academic_class;
use App\Models\academic_class_student;
use App\Models\Score;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ScoreReports extends Component
{

    public $academic_class, $month, $semester, $type;

    public function updatedType()
    {
        $this->semester = null;
        $this->month = null;
    }

    public function render()
    {

        $academic_class = DB::table('academic_classes')->get();
        $academic_year = DB::table('academic_years')->get();
        $studies = Score::where('academic_class_id', $this->academic_class->id)
            ->join('academic_class_student', 'academic_class_student.id', 'scores.academic_class_student_id')
            ->join('students', 'students.id', 'academic_class_student.student_id')
            ->select(DB::raw("CONCAT(students.first_name, ' ', students.last_name) as name"), 'students.gender', 'semester', 'type', 'khmer', 'math', 'science', 'socail', 'students.id as student_id')
            ->when($this->month ?? null, function ($q) {
                return $q
                    ->where('scores.type', $this->month);
            })->when($this->semester ?? null, function ($q) {
                return $q
                    ->where('scores.type', 0)->where('scores.semester', $this->semester);
            })
            // ->select('scores.id','students.first_name','students.last_name','students.gender','semester','type','khmer' ,'math','science','socail','students.id as student_id',DB::raw("MONTH(studies.date) month"))
            ->where('academic_class_student.academic_class_id', $this->academic_class->id)

            ->get();
        $students = academic_class_student::where('academic_class_id', $this->academic_class->id)
            ->join('students', 'academic_class_student.student_id', 'students.id')
            ->select(DB::raw("CONCAT(students.first_name, ' ', students.last_name) as name"), 'students.gender', 'students.id')
            ->where('academic_class_id', $this->academic_class->id)
            // ->OrderBy('rank')
            ->get();
        $data = [];
        if (count($studies) != 0) {
            $scores = [
                [
                    'avg' => null,
                    'key' => null,
                ]
            ];

            foreach ($studies as $k => $study) {
                $scores[$k]['avg'] = ($study->khmer + $study->math + $study->science + $study->socail) / 4;
                $scores[$k]['key'] = $k;
            }

            arsort($scores);

            $scores = array_values($scores);

            $rank = 1;
            $prev_rank = $rank;
            foreach ($scores as $k => $score) {
                if ($k < 1) {
                    $studies[$score['key']]->rank = $rank;
                } else {
                    if ($scores[$k]['avg'] != $scores[$k - 1]['avg']) {
                        $rank++;
                        $prev_rank = $rank;
                        $studies[$score['key']]->rank = $rank;
                    } else {
                        $rank++;
                        $studies[$score['key']]->rank = $prev_rank;
                    }
                }
            }

            foreach ($students as $k => $student) {
                $data[$k][] = $student->name;
                $data[$k][] = $student->gender == 1 ? 'ប' : 'ស';
                $data[$k][] = 0;
                $data[$k][] = 0;
                $data[$k][] = 0;
                foreach ($studies as $k2 => $score) {
                    if (!empty($this->month)) {
                        if ($student->id == $score->student_id) {
                            if ($score->month == $this->month) {
                                if ($score->type == 1) {
                                    $data[$k][2] += 1;
                                } elseif ($score->type == 2) {
                                    $data[$k][3] += 1;
                                }
                                $data[$k][4] += 1;
                            }
                        }
                    } else {
                        if ($student->id == $score->student_id) {
                            if ($score->type == 1) {
                                $data[$k][2] += 1;
                            } elseif ($score->type == 2) {
                                $data[$k][3] += 1;
                            }
                            $data[$k][4] += 1;
                        }
                    }
                }
            }
        }

        $studies = $studies->sortBy('rank');

        return view('livewire.score.score-reports', compact('studies', 'academic_class', 'data'));
    }
    public function mount($id)
    {
        $this->academic_class = Academic_class::join('academic_years', 'academic_years.id', 'academic_classes.academic_year_id')
            ->select('academic_classes.id', 'academic_classes.name_class', 'academic_years.name_year as academic_year_name')->find($id);
    }
}

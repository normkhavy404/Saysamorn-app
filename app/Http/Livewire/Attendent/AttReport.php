<?php

namespace App\Http\Livewire\Attendent;

use App\Models\Academic_class;
use App\Models\academic_class_student;
use App\Models\Attendent;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AttReport extends Component
{

    public $academic_class, $month, $ac_id;

    public function render()
    {

        $this->academic_class = Academic_class::find($this->ac_id);

        $attendances = Attendent::where('academic_class_id', $this->academic_class->id)
            ->join('academic_class_student', 'academic_class_student.id', 'attendents.academic_class_student_id')
            ->join('students', 'academic_class_student.student_id', 'students.id')
            ->select(DB::raw("CONCAT(students.first_name, ' ', students.last_name) as name"), 'students.gender', 'students.id as student_id', 'attendents.type', DB::raw("MONTH(attendents.date) month"))
            ->get();

        $students = academic_class_student::where('academic_class_id', $this->academic_class->id)
            ->join('students', 'academic_class_student.student_id', 'students.id')
            ->select(DB::raw("CONCAT(students.first_name, ' ', students.last_name) as name"), 'students.gender', 'students.id')
            ->get();

        $data = [];

        foreach($students as $k => $student) {
            $data[$k][] = $student->name;
            $data[$k][] = $student->gender == 1 ? 'ប' : 'ស';
            $data[$k][] = 0;
            $data[$k][] = 0;
            $data[$k][] = 0;
            foreach($attendances as $k2 => $attendance) {
                if(!empty($this->month)) {
                    if($student->id == $attendance->student_id) {
                        if($attendance->month == $this->month) {
                            if($attendance->type == 1) {
                                $data[$k][2] += 1;
                            } elseif($attendance->type == 2) {
                                $data[$k][3] += 1;
                            }
                            $data[$k][4] += 1;
                        }
                    }
                } else {
                    if($student->id == $attendance->student_id) {
                        if($attendance->type == 1) {
                            $data[$k][2] += 1;
                        } elseif($attendance->type == 2) {
                            $data[$k][3] += 1;
                        }
                        $data[$k][4] += 1;
                    }
                }
            }
        }

        return view('livewire.attendent.att-report', compact('data'));
    }

    public function mount($id)
    {
        $this->ac_id = $id;
    }
}

<?php

namespace App\Http\Livewire\Score;

use App\Models\Academic_class;
use App\Models\academic_class_student;
use App\Models\Score;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ScoreEdit extends Component
{
    public $academic_class;
    public $student_id , $semester, $type, $khmer , $math , $science , $socail, $score_id, $student_name;
    public function render()
    {
        // dd($this->academic_class->id);

        $students = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id', 'students.first_name', 'students.last_name')
        ->where('academic_class_student.academic_class_id', $this->academic_class->id)
        ->get();

        // dd($students);

        $score = DB::table('scores')
        ->join('academic_class_student','academic_class_student.id','scores.academic_class_student_id')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('scores.id','students.first_name','students.last_name','semester','type','khmer' ,'math','science','socail')
        ->get();
        return view('livewire.score.score-edit', compact('score','students'));
    }
    public function mount($id){
        // $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        // ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);
        // dd($this->academic_class);

        $score = Score::find($id);
        $this->semester = $score->semester;
        $this->type = $score->type;
        $this->khmer = $score->khmer;
        $this->math  = $score->math;
        $this->science = $score->science;
        $this->socail = $score->socail;
        $this->score_id = $score->id;

        $this->academic_class = Academic_class::join('academic_class_student', 'academic_classes.id', 'academic_class_id')
            ->join('academic_years','academic_years.id','academic_classes.academic_year_id')
            ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')
            ->where('academic_class_student.id', $score->academic_class_student_id)->first();

        // dd($score);
        $student = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id','students.id as student_id', 'students.first_name', 'students.last_name')
        ->where('academic_class_student.id', $score->academic_class_student_id)
        ->first();

        $this->student_name = $student->first_name . " " .$student->last_name;

        // dd($student->student_id);
    }
    public function AttUpdate(){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($this->academic_class->id);
        $score = Score::find($this->score_id);
        $score->semester = $this->semester;
        $score->type = $this->type;
        $score->khmer = $this->khmer;
        $score->math  = $this->math;
        $score->science = $this->science;
        $score->socail = $this->socail;
        if($score->save()){
            return to_route('score_index', $this->academic_class->id);
        }
    }
}

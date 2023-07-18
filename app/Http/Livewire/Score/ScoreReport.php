<?php

namespace App\Http\Livewire\Score;

use Livewire\Component;
use App\Models\Academic_class;
use Illuminate\Support\Facades\DB;

class ScoreReport extends Component
{
    public $academic_class;
    public function render()
    {
         $students = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id', 'students.first_name', 'students.last_name')
        ->where('academic_class_id', $this->academic_class->id)
        ->get();
        $score = DB::table('scores')
        ->join('academic_class_student','academic_class_student.id','scores.academic_class_student_id')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('scores.id','students.first_name','students.last_name','students.gender','semester','type','khmer' ,'math','science','socail')
        ->get();
        return view('livewire.score.score-report', compact('score'));
    }
    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);
    }
}

<?php

namespace App\Http\Livewire\Score;

use App\Models\Academic_class;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ScoreIndex extends Component
{
    public $academic_class;
    public function render()
    {
        $students = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id', 'students.first_name', 'students.last_name')->get();

        $score = DB::table('scores')
        ->join('academic_class_student','academic_class_student.id','scores.academic_class_student_id')
        ->join('students','students.id','academic_class_student.student_id')
        ->select('scores.id','students.first_name','students.last_name','students.gender','semester','type','khmer','math','science','socail')
        ->where('academic_class_student.academic_class_id', $this->academic_class->id)
        ->get();
        // dd($score->all());
        return view('livewire.score.score-index', compact('students','score'));
    }
    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);
    }
}

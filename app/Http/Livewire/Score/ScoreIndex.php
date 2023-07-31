<?php

namespace App\Http\Livewire\Score;

use App\Models\Academic_class;
use App\Models\Score;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ScoreIndex extends Component
{
    use LivewireAlert;
    public $academic_class;
    public $delete_score;

    public function getListeners()
    {
    return [
    	'confirmed'
    ];
   }
    public function render()
    {
        // $score = $this->total_score::avg();
        // dd($this->total_score);
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
    public function AttDelete($id){
        $this->delete_score = $id;
        $this->alert('warning', '', [
            'position' => 'center',
            'timer' => '',
            'toast' => false,
            'text' => 'តើអ្នកពិតជាចង់លុបមែនទេ ? ',
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'លុប',
            'cancelButtonText' => 'ទេ',
           ]);
    }
    public function confirmed()
    {
        $score = Score::findOrfail($this->delete_score);
        $score->delete();
        $this->alert('success', 'លុបជោគជ័យ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]);
    }
}

<?php

namespace App\Http\Livewire\Score;

use App\Models\Academic_class;
use App\Models\Score;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ScoreCreate extends Component
{
    public $academic_class, $academic_class_student_id , $semester , $type ,$khmer ,$math, $science , $socail;

    protected $rules =[
        'academic_class_student_id' => 'required',
        'semester'                  => 'required',
        'type'                      => 'required',
        'khmer'                     => 'required',
        'math'                      => 'required',
        'science'                   => 'required',
        'socail'                    => 'required'
    ];
    protected $messages = [
        'academic_class_student_id.required'  => 'សូមជ្រើសរើសសិស្សដែលត្រូវដាក់ពិន្ទុ',
        'semester.required'                   => 'សូមជ្រើសរើសឆមាស',
        'type.required'                       => 'សូមជ្រើសរើសខែ',
        'khmer.required'                      =>  'សូមបំពេញពិន្ទុមុខវិជ្ជាភាសាខ្មែរ',
        'math.required'                       =>  'សូមបំពេញពិន្ទុមុខវិជ្ជាគណិតវិទ្យា',
        'science.required'                    =>  'សូមបំពេញពិន្ទុមុខវិជ្ជាវិទ្យាសាស្រ្ត',
        'socail.required'                     =>  'សូមបំពេញពិន្ទុមុខវិជ្ជាសិក្សាសង្គម',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        $students = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id', 'students.first_name', 'students.last_name')
        ->where('academic_class_id', $this->academic_class->id)
        ->get();
        $score = DB::table('scores')->get();
        return view('livewire.score.score-create', compact('students','score'));
    }
    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);
    }
    public function CreateOnScore(){
        $this->validate();
        $score = new Score();
        $score->academic_class_student_id = $this->academic_class_student_id;
        $score->semester = $this->semester;
        $score->type = $this->type;
        $score->khmer = $this->khmer;
        $score->math = $this->math;
        $score->science = $this->science;
        $score->socail = $this->socail;
        $score->save();

    }
}

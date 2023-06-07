<?php

namespace App\Http\Livewire\AcademicClassStudent;

use App\Models\academic_class_student;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AcdemicClassStudentCreate extends Component
{
    public $student_id , $academic_class_id , $status;

    protected $rules =[
        'student_id' => 'required',
        'academic_class_id' => 'required',
        'status'    => 'required'
    ];
    public function render()
    {
        $students = DB::table('students')->get();
        $academic_classes = DB::table('academic_classes')->get();
        $academic_class_student = DB::table('academic_class_student')
        ->join('students','students.id','academic_class_student.student_id')
        ->join('academic_classes','academic_classes.id','academic_class_student.academic_class_id')
        ->select('academic_class_student.id','students.first_name','students.last_name','academic_classes.name_class','academic_class_student.status')
        ->get();
        return view('livewire.academic-class-student.acdemic-class-student-create', compact('academic_class_student','students','academic_classes'));
    }

    public function CreateOnClassStudent(){
        $this->validate();
        $academic_class_student = new academic_class_student();
        $academic_class_student->student_id = $this->student_id;
        $academic_class_student->academic_class_id = $this->academic_class_id;
        $academic_class_student->status = $this->status;
        if($academic_class_student->save()){
            session()->flash('success','Academic Class Student Successfuly Created.');
            return to_route('class_student_index');
        }
    }
}

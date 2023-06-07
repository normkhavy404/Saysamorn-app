<?php

namespace App\Http\Livewire\AcademicClassStudent;

use App\Models\academic_class_student;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AcdemicClassStudentEdit extends Component
{
    public $student_id , $academic_class_id , $status, $academic_class_student_id;
    public function render()
    {
        $students = DB::table('students')->get();
        $academic_classes = DB::table('academic_classes')->get();
        $academic_class_student = DB::table('academic_class_student')
        ->join('students','students.id','academic_class_student.student_id')
        ->join('academic_classes','academic_classes.id','academic_class_student.academic_class_id')
        ->select('academic_class_student.id','students.first_name','students.last_name','academic_classes.name_class','academic_class_student.status')
        ->get();
        return view('livewire.academic-class-student.acdemic-class-student-edit', compact('academic_class_student','students','academic_classes'));
    }

    public function mount($id){
        $academic_class_student = academic_class_student::find($id);
        $this->student_id =$academic_class_student->student_id;
        $this->academic_class_id = $academic_class_student->academic_class_id;
        $this->status = $academic_class_student->status;
        $this->academic_class_student_id = $academic_class_student->id;
    }

    public function UpdateOnClassUpdate(){
        $academic_class_student = academic_class_student::find($this->academic_class_student_id);
        $academic_class_student->student_id = $this->student_id;
        $academic_class_student->academic_class_id = $this->academic_class_id;
        $academic_class_student->status = $this->status;

        if($academic_class_student->save()){
            session()->flash('success','Acadmic Class Student Succesfuly updated.');
            return to_route('class_student_index');
        }
    }
}

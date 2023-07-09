<?php

namespace App\Http\Livewire\AcademicClassStudent;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AcdemicClassStudentIndex extends Component
{
    public function render()
    {
        $students = DB::table('students')->get();
        $academic_classes = DB::table('academic_classes')->get();
        $academic_class_student = DB::table('academic_class_student')
        ->join('students','students.id','academic_class_student.student_id')
        ->join('academic_classes','academic_classes.id','academic_class_student.academic_class_id')
        ->select('academic_class_student.id','students.first_name','students.last_name','academic_classes.name_class','academic_class_student.status')
        ->get();
        // dd($academic_class_student);
        return view('livewire.academic-class-student.acdemic-class-student-index',compact('academic_class_student','students','academic_classes'));
    }
}

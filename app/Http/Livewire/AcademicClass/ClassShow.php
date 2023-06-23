<?php

namespace App\Http\Livewire\AcademicClass;

use Livewire\Component;
use App\Models\Academic_class;
use Illuminate\Support\Facades\DB;

class ClassShow extends Component
{

    public $academic_class, $students;
    public function render()
    {
        return view('livewire.academic-class.class-show');
    }
    public function mount($id){
        $this->academic_class = Academic_class::find($id);
        $this->students = DB::table('academic_class_student')->where('academic_class_id', $this->academic_class->id)->join('students', 'students.id', 'academic_class_student.student_id')->select('students.code', 'students.first_name', 'students.last_name', 'students.gender')->get();
    }
}

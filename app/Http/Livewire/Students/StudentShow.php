<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class StudentShow extends Component
{
    public $students;
    public function render()
    {
        return view('livewire.students.student-show');
    }
    public function mount($id){
        $this->students = Student::find($id);

    }
}

<?php

namespace App\Http\Livewire\AcademicClass;

use Livewire\Component;

class ClassCreate extends Component
{
    public $name_class , $teacher_name , $academic_year;
    public function render()
    {
        return view('livewire.academic-class.class-create');
    }
}
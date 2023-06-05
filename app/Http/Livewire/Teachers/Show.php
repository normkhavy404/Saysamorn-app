<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;

class Show extends Component
{
    // public $code, $first_name ,$last_name ,$gender ,$telephone , $email,  $teacher_id;
    public $teachers;
    public function render()
    {
        return view('livewire.teachers.show');
    }
    public function mount($id){
        $this->teachers          = Teacher::find($id);
        // $this->code        = $teachers->code;
        // $this->first_name  = $teachers->first_name;
        // $this->last_name   = $teachers ->last_name;
        // $this->gender      = $teachers->gender;
        // $this->telephone   = $teachers->telephone;
        // $this->email       = $teachers->email;
        // $this->teacher_id  = $teachers->id;
    }
}
<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;

class Edit extends Component
{
    public $code, $first_name ,$last_name ,$gender ,$telephone , $email,  $teacher_id;

    public function mount($id){
        $teachers = Teacher::find($id);
        $this->code = $teachers->code;
        $this->first_name = $teachers->first_name;
        $this->last_name = $teachers ->last_name;
        $this->gender = $teachers->gender;
        $this->telephone = $teachers->telephone;
        $this->email = $teachers->email;
        $this->teacher_id = $teachers->id;
    }
    public function update(){
        $teachers = Teacher::find($this->teacher_id);
        $teachers->code = $this->code;
        $teachers->first_name = $this->first_name;
        $teachers->last_name = $this->last_name;
        $teachers->gender = $this->gender;
        $teachers->telephone = $this->telephone;
        $teachers->email = $this->email;
        if($teachers->save()) {
            return to_route('index');
        }
    }
    public function render()
    {
        $teachers = Teacher::all();
        return view('livewire.teachers.edit',compact('teachers'));
    }
}
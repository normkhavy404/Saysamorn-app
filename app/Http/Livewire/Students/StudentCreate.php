<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentCreate extends Component
{
    public $code , $first_name , $last_name , $gender , $dob , $fa_name , $mo_name ;
    public $rules =[
        'code'        => 'required',
        'first_name'  => 'required',
        'last_name'   => 'required',
        'gender'      => 'required',
        'dob'         => 'required',
        'fa_name'     => 'required',
        'mo_name'     => 'required',

    ];
    public function render()
    {
        $students = DB::table('students')->get();
        return view('livewire.students.student-create' , compact('students'));
    }
    public function CreateOnStudent(){
        $this->validate();
        $students             = new Student();
        $students->code       = $this->code;
        $students->first_name = $this->first_name;
        $students->last_name  = $this->last_name;
        $students->gender     = $this->gender;
        $students->dob        = $this->dob;
        $students->fa_name    = $this->fa_name;
        $students->mo_name    = $this->mo_name;

        if($students->save()){
            session()->flash('success', 'Student succesfully created.');
            return to_route('student_index');
        }
    }
}
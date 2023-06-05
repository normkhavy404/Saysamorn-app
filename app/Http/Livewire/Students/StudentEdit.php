<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StudentEdit extends Component
{
    public $code, $first_name ,$last_name ,$gender ,$dob , $fa_name, $mo_name,  $student_id;

    public function mount($id){
        $students = Student::find($id);
        $this->code = $students->code;
        $this->first_name = $students->first_name;
        $this->last_name = $students ->last_name;
        $this->gender = $students->gender;
        $this->dob = $students->dob;
        $this->fa_name = $students->fa_name;
        $this->mo_name = $students->mo_name;
        $this->student_id = $students->id;
    }
    public function update(){
        $students = Student::find($this->student_id);
        $students->code = $this->code;
        $students->first_name = $this->first_name;
        $students->last_name = $this->last_name;
        $students->gender = $this->gender;
        $students->dob = $this->dob;
        $students->fa_name = $this->fa_name;
        $students->mo_name = $this->mo_name;
        if($students->save()) {
            session()->flash('success', 'Student succesfully updated.');
            return to_route('student_index');
        }
    }
    public function render()
    {
        $students = DB::table('students')->get();
        return view('livewire.students.student-edit' , compact('students'));
    }
}
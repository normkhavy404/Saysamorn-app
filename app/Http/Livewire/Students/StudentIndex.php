<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class StudentIndex extends Component
{
    public function render()
    {
        $students = Student::all();
        return view('livewire.students.student-index', compact('students'));
    }
    public function DeleteOnStudent($id){
        $students = Student::findOrfail($id);
        $students->delete();
        session()->flash('success', 'Student succesfully Deleted.');

    }
}
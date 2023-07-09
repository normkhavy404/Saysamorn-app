<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use WithPagination;
    public $total_stu, $total_f;
    public function render()
    {
        $this->total_f= Student::where('students.gender',2)->count();
        $this->total_stu= Student::count();
        $students = Student::paginate(7);
        return view('livewire.students.student-index', compact('students'));
    }
    public function DeleteOnStudent($id){
        $students = Student::findOrfail($id);
        $students->delete();
        session()->flash('success', 'Student succesfully Deleted.');

    }
}

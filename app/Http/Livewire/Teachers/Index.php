<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $teachers = Teacher::paginate(5);
        return view('livewire.teachers.index', compact('teachers'));
    }
    public function destroy($id){
        $teachers = Teacher::findOrfail($id);
        $teachers->delete();
    }
}

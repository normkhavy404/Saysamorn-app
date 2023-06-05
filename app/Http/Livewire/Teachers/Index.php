<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $teachers = Teacher::all();
        return view('livewire.teachers.index', compact('teachers'));
    }
    public function destroy($id){
        $teachers = Teacher::findOrfail($id);
        $teachers->delete();
    }
}
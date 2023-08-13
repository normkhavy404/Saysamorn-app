<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Report extends Component
{
    public $total_teacher;
    public function render()
    {

        $this->total_teacher = Teacher::where('teachers.gender', 2)->count();
        $teachers = DB::table('teachers')->get();
        return view('livewire.teachers.report', compact('teachers'));
    }
}

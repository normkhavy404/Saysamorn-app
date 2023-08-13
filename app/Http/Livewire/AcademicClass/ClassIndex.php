<?php

namespace App\Http\Livewire\AcademicClass;

use App\Models\Academic_class;
use App\Models\Academic_year;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ClassIndex extends Component
{
    public $name_class, $teacher_id, $academic_year_id, $academic_year;
    public function render()
    {

        $academic_years = DB::table('academic_years')->get();
        $teachers = DB::table('teachers')->get();
        $academic_classes = DB::table('academic_classes')
            ->where("academic_year_id", $this->academic_year ??  Academic_year::whereStatus(1)->first()->id)
            ->join('teachers', 'teachers.id', 'academic_classes.teacher_id')
            ->join('academic_years', 'academic_years.id', 'academic_classes.academic_year_id')
            ->select('academic_classes.id', 'academic_classes.name_class', 'teachers.first_name', 'teachers.last_name', 'academic_years.name_year as academic_year_name')->get();
        return view('livewire.academic-class.class-index', compact('academic_classes', 'teachers', 'academic_years'));
    }

    public function DeleteOnAcademicClass($id)
    {
        $academic_classes = Academic_class::findOrfail($id);
        $academic_classes->delete();
        session()->flash('success', 'Academic Class succesfully Deleted.');
    }
}

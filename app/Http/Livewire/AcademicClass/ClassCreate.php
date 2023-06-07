<?php

namespace App\Http\Livewire\AcademicClass;

use App\Models\Academic_class;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ClassCreate extends Component
{
    public $name_class , $teacher_id , $academic_year_id;

    public $rules =[
        'name_class' => 'required',
        'teacher_id' => 'required',
        'academic_year_id' => 'required'
    ];
    public function render()
    {
        $teachers = DB::table('teachers')->get();
        $academic_years = DB::table('academic_years')->get();
        $academic_classes = DB::table('academic_classes')
        ->join('teachers','teachers.id','academic_classes.teacher_id')
        ->join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','teachers.first_name', 'teachers.last_name','academic_years.name_year as academic_year_name')->get();
        return view('livewire.academic-class.class-create', compact('academic_classes','teachers','academic_years'));
    }
    public function CreateOnAcademicClass(){
        $this->validate();
        $academic_class = new Academic_class();
        $academic_class->name_class = $this->name_class;
        $academic_class->teacher_id = $this->teacher_id;
        $academic_class->academic_year_id = $this->academic_year_id;
        if($academic_class->save()){
            session()->flash('success', 'Academic Class succesfully created.');
            return to_route('class_index');
        }
    }
}

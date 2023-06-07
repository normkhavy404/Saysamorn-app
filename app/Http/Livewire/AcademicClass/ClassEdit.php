<?php

namespace App\Http\Livewire\AcademicClass;

use Livewire\Component;
use App\Models\Academic_class;
use Illuminate\Support\Facades\DB;

class ClassEdit extends Component
{
    public $name_class , $teacher_id , $academic_year_id, $academic_class_id;
    public function render()
    {
        $teachers = DB::table('teachers')->get();
        $academic_years = DB::table('academic_years')->get();
        $academic_classes = DB::table('academic_classes')
        ->join('teachers','teachers.id','academic_classes.teacher_id')
        ->join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','teachers.first_name', 'teachers.last_name','academic_years.name_year as academic_year_name')->get();
        return view('livewire.academic-class.class-edit', compact('academic_classes','teachers','academic_years'));
    }
    public function mount($id){
        $academic_classes = Academic_class::find($id);
        $this->name_class = $academic_classes->name_class;
        $this->teacher_id = $academic_classes->teacher_id;
        $this->academic_year_id = $academic_classes->academic_year_id;
        $this->academic_class_id = $academic_classes->id;
    }
    public function UpdateOnAcdemicClass(){
        $academic_classes = Academic_class::find($this->academic_class_id);
        $academic_classes->name_class = $this->name_class;
        $academic_classes->teacher_id = $this->teacher_id;
        $academic_classes->academic_year_id = $this->academic_year_id;

        if($academic_classes->save()){
            session()->flash('success', 'Academic Class Successfuly Updateed.');
            return to_route('class_index');
        }
    }
}

<?php

namespace App\Http\Livewire\Attendent;

use App\Models\Academic_class;
use App\Models\Attendent;
use Livewire\Component;

class AttEdit extends Component
{
    public $academic_class, $academic_class_student_id, $type, $attendent_id;
    public function render()
    {
        return view('livewire.attendent.att-edit');
    }
    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);
        $attendent = Attendent::find($id);
        $this->academic_class_student_id = $attendent->academic_class_student_id;
        $this->type = $attendent->type;
        $this->attendent_id = $attendent->id;
    }
    
}

<?php

namespace App\Http\Livewire\Attendent;

use Livewire\Component;
use App\Models\Attendent;
use App\Models\Academic_class;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class AttEdit extends Component
{
    public $academic_class, $academic_class_student_id, $type, $attendent_id , $stundent;
    public function render()
    {
        $attendent = DB::table('attendents')->get();
        return view('livewire.attendent.att-edit', compact('attendent'));
    }
    public function mount($id){
        // $attendent = Attendent::find($id);
        // $this->academic_class_student_id = $attendent->academic_class_student_id;
        // $this->type = $attendent->type;
        // $this->attendent_id = $attendent->id;
        // dd($attendent);
            // $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
            // ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);

            // $this->stundent = Student::join('students', 'students.id','academic_class_student.stundent_id')
            // ->select('s ');
            // $attendent = Attendent::find($id);
            // $this->academic_class_student_id = $attendent->academic_class_student_id;
            // $this->type = $attendent->type;
            // $this->attendent_id = $attendent->id;
    }

}

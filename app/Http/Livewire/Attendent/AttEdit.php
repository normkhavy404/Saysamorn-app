<?php

namespace App\Http\Livewire\Attendent;

use Livewire\Component;
use App\Models\Attendent;
use App\Models\Academic_class;
use Illuminate\Support\Facades\DB;

class AttEdit extends Component
{
    public $academic_class;
    public $academic_class_student_id, $date , $type , $att_id;
    public function render()
    {
        $students = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id', 'students.first_name', 'students.last_name')
        ->where('academic_class_id', $this->academic_class->id)
        ->get();
        $attendent = DB::table('attendents')
        ->join('academic_class_student','academic_class_student.id','attendents.academic_class_student_id')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('attendents.id','students.first_name','students.last_name','students.gender','date','type')
        ->get();
        // dd($attendent);
        return view('livewire.attendent.att-edit',compact('attendent','students'));
    }

    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);

        $attendent = Attendent::find($id);
        $this->academic_class_student_id = $attendent->academic_class_student_id;
        $this->date = $attendent->date;
        $this->type = $attendent->type;
        $this->att_id = $attendent->id;
        dd($attendent);


    }
    public function UpdateAtt(){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($this->academic_class->id);
        $attendent = Attendent::find($this->att_id);
    }
}

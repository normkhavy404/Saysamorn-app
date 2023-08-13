<?php

namespace App\Http\Livewire\Attendent;

use Livewire\Component;
use App\Models\Attendent;
use App\Models\Academic_class;
use Illuminate\Support\Facades\DB;

class AttEdit extends Component
{
    public $academic_class;
    public $student_id , $student_name, $date , $type , $att_id ;
    public function render()
    {
        $student = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id', 'students.first_name', 'students.last_name')
        ->where('academic_class_student.academic_class_id', $this->academic_class->id)
        ->get();

        // dd($student);
        $attendent = DB::table('attendents')
        ->join('academic_class_student','academic_class_student.id','attendents.academic_class_student_id')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('attendents.id','students.first_name','students.last_name','students.gender','date','type')
        ->get();
        // dd($attendent);
        return view('livewire.attendent.att-edit',compact('attendent','student'));
    }

    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);

        $attendent = Attendent::find($id);

        $this->date = $attendent->date;
        $this->type = $attendent->type;
        $this->att_id = $attendent->id;
        // dd($this->att_id);
        // dd($attendent);

        $this->academic_class = Academic_class::join('academic_class_student', 'academic_classes.id', 'academic_class_id')
            ->join('academic_years','academic_years.id','academic_classes.academic_year_id')
            ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')
            ->where('academic_class_student.id', $attendent->academic_class_student_id)->first();

        // dd($attendent);

        $student = DB::table('academic_class_student')
        ->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('academic_class_student.id','students.id as student_id', 'students.first_name', 'students.last_name')
        ->where('academic_class_student.id', $attendent->academic_class_student_id)
        ->first();
        $this->student_name = $student->first_name . " " .$student->last_name;


    }
    public function UpdateAtt(){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($this->academic_class->id);
        $attendent = Attendent::find($this->att_id);
        $attendent->date = $this->date;
        $attendent->type = $this->type;
        if($attendent->save()){
            return to_route('attendent_index', $this->academic_class->id);
        }
    }
}

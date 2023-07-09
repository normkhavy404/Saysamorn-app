<?php

namespace App\Http\Livewire\AcademicClass;

use Livewire\Component;
use App\Models\Academic_class;
use App\Models\academic_class_student;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ClassShow extends Component
{
    use WithPagination;

    public $academic_class, $students, $total_f;
    public function render()
    {
        $teachers = DB::table('teachers')->get();
        $academic_years = DB::table('academic_years')->get();
        $academic_classes = DB::table('academic_classes')
        ->join('teachers','teachers.id','academic_classes.teacher_id')
        ->join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','teachers.first_name', 'teachers.last_name','academic_years.name_year as academic_year_name')->paginate(10);
        return view('livewire.academic-class.class-show', compact('teachers','academic_years','academic_classes'));
    }
    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);

        $this->students = academic_class_student::where('academic_class_id',
        $this->academic_class->id)->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('students.code', 'students.first_name', 'students.last_name', 'students.gender','students.dob','students.fa_name','students.mo_name')
        ->get();

        $this->total_f = academic_class_student::where('academic_class_id',
        $this->academic_class->id)->join('students', 'students.id', 'academic_class_student.student_id')
        ->select('students.code', 'students.first_name', 'students.last_name', 'students.gender','students.dob','students.fa_name','students.mo_name')
        ->where('students.gender', 2)->count();

    }
    public function print(){
        $script =
            "<script>
                var newWin = window.open('', 'Print-Window');
                newWin.document.open();
                newWin.document.write('<html><body onload=\"window.print()\">' + document.documentElement.innerHTML + '</html>');
                newWin.document.close();
                setTimeout(function(){newWin.close();},10);
            </script>";

            $this->dispatchBrowserEvent('print', $script);

    }
}

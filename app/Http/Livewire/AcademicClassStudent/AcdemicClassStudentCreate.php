<?php

namespace App\Http\Livewire\AcademicClassStudent;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\academic_class_student;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AcdemicClassStudentCreate extends Component
{
    use LivewireAlert;
    public $student_id , $academic_class_id;

    protected $rules =[
        'student_id' => 'required',
    ];
    protected $messages = [
        'student_id.required' => 'សូមជ្រើសរើសសិស្ស'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        $academic_class_student = academic_class_student::pluck('student_id');
        $students = DB::table('students')->whereNotIn('id', $academic_class_student)->get();
        // $academic_classes = DB::table('academic_classes')->get();
        // $academic_class_student = DB::table('academic_class_student')
        // ->join('students','students.id','academic_class_student.student_id')
        // ->join('academic_classes','academic_classes.id','academic_class_student.academic_class_id')
        // ->select('academic_class_student.id','students.first_name','students.last_name','academic_classes.name_class','academic_class_student.status')
        // ->get();

        return view('livewire.academic-class-student.acdemic-class-student-create', compact('students'));
    }

    public function mount($id) {
        $this->academic_class_id = $id;
    }

    public function CreateOnClassStudent(){
        $this->validate();
        $academic_class_student = new academic_class_student();
        $academic_class_student->student_id = $this->student_id;
        $academic_class_student->academic_class_id = $this->academic_class_id;
        $academic_class_student->status = 1;
        if($academic_class_student->save()){
            $this->alert('success', 'ទាញជោគជ័យ', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
               ]);
        }
    }
}

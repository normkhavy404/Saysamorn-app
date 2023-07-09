<?php

namespace App\Http\Livewire\Attendent;

use Livewire\Component;
use App\Models\Academic_class;
use App\Models\academic_class_student;
use App\Models\Attendent;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AttCreate extends Component
{
    public $academic_class, $academic_class_student_id , $type;
    protected $rules =[
        'academic_class_student_id' => 'required',
        'type'                      => 'required',
    ];
    protected $messages = [
        'academic_class_student_id.required' => 'សូមជ្រើសរើសសិស្សដែលអវត្តមាន',
        'type.required'                       => 'សូមជ្រើសរើសប្រភេទ'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Y-m-d');
        $exist_att = Attendent::where('date', $formattedDateTime)->pluck('academic_class_student_id');

        $students = DB::table('academic_class_student')
            ->join('students', 'students.id', 'academic_class_student.student_id')
            ->select('academic_class_student.id', 'students.first_name', 'students.last_name')
            ->whereNotIn('academic_class_student.id', $exist_att)
            ->where('academic_class_id', $this->academic_class->id)->get();

        // $attendent = DB::table('attendents')
        // ->join('academic_class_student','academic_class_student.id','attendent.academic_class_studnet_id')
        // ->select('attendents.id',)->get();
        $attendent = DB::table('attendents')->get();

        return view('livewire.attendent.att-create', compact('students','attendent'));
    }
    public function mount($id){
        $this->academic_class = Academic_class::join('academic_years','academic_years.id','academic_classes.academic_year_id')
        ->select('academic_classes.id','academic_classes.name_class','academic_years.name_year as academic_year_name')->find($id);
    }
    public function CreateAtt(){
        $this->validate();
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');
        $attendent = new Attendent();
        $attendent->academic_class_student_id = $this->academic_class_student_id;
        $attendent->date = $formattedDateTime;
        $attendent->type = $this->type;
        // dd($attendent);
        if($attendent->save()){
            return to_route('attendent_index', $this->academic_class->id);
        }
    }
}

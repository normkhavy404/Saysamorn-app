<?php

namespace App\Http\Livewire\Attendent;

use alert;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Attendent;
use App\Models\Academic_class;
use Illuminate\Support\Facades\DB;

class AttIndex extends Component
{
    use LivewireAlert;
    public $academic_class, $from_date, $to_date;
    public $delete_att;
    public function getListeners()
    {
        return [
            'confirmed'
        ];
    }
    public function render()
    {
        $students = DB::table('academic_class_student')
            ->join('students', 'students.id', 'academic_class_student.student_id')
            ->select('academic_class_student.id', 'students.first_name', 'students.last_name')->get();

        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Y-m-d');

        $attendent = DB::table('attendents')
            ->join('academic_class_student', 'academic_class_student.id', 'attendents.academic_class_student_id')
            ->join('students', 'students.id', 'academic_class_student.student_id')
            ->select('attendents.id', 'students.first_name', 'students.last_name', 'students.gender', 'date', 'type')
            ->where('academic_class_student.academic_class_id', $this->academic_class->id)
            ->whereBetween('attendents.date', [$this->from_date ?? $formattedDateTime, $this->to_date ?? $formattedDateTime])
            ->orderBy('attendents.date')
            ->get();
        return view('livewire.attendent.att-index', compact('attendent', 'students'));
    }
    public function mount($id)
    {
        $this->academic_class = Academic_class::join('academic_years', 'academic_years.id', 'academic_classes.academic_year_id')
            ->select('academic_classes.id', 'academic_classes.name_class', 'academic_years.name_year as academic_year_name')->find($id);
    }
    public function DestroyAtt($id)
    {
        $attendents = Attendent::findOrfail($id);
        $this->delete_att = $id;
        $this->alert('warning', '', [
            'position' => 'center',
            'timer' => '',
            'toast' => false,
            'text' => 'តើអ្នកពិតជាចង់លុបមែនទេ ? ',
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'លុប',
            'cancelButtonText' => 'ទេ',
        ]);
    }
    public function confirmed()
    {
        $attendents = Attendent::findOrfial($this->delete_att);
        $attendents->delete();
        $this->alert('success', 'លុបជោគជ័យ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}

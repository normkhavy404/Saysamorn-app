<?php

namespace App\Http\Livewire\Students;

use App\Models\Student;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use WithPagination, LivewireAlert;

    public function getListeners()
    {
    return [
    	'confirmed'
    ];
   }

    public $total_stu, $total_f, $delete_item;
    public $search ='';
    public function render()
    {
        $this->total_f= Student::where('students.gender',2)->count();
        $this->total_stu= Student::count();
        $students = Student::where('first_name','like','%' .$this->search. '%')->paginate(7);
        return view('livewire.students.student-index', compact('students'));
    }

    public function DeleteOnStudent($id){

        $this->delete_item = $id;

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
        // Do something
        $students = Student::findOrfail($this->delete_item);
        $students->delete();
        $this->alert('success', 'លុបជោគជ័យ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]);
    }
}

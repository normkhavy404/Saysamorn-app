<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;


class Index extends Component
{
    use LivewireAlert;
    public $total_teacher , $delete_teacher;
    public function getListeners()
    {
    return [
    	'confirmed'
    ];
   }
    public function render()
    {
        $this->total_teacher = Teacher::where('teachers.gender', 2)->count();
        $teachers = Teacher::all();
        return view('livewire.teachers.index', compact('teachers'));
    }
    public function destroy($id){

        $this->delete_teacher = $id;

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
        $teachers = Teacher::findOrfail($this->delete_teacher);
        $teachers->delete();
        $this->alert('success', 'លុបជោគជ័យ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]);
    }
}

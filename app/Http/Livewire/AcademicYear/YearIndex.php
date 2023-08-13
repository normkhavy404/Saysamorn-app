<?php

namespace App\Http\Livewire\AcademicYear;

use App\Models\Academic_year;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class YearIndex extends Component
{
    use LivewireAlert;
    public function getListeners()
    {
    return [
    	'confirmed'
    ];
   }
   public $delete_year;
    public function render()
    {
        $academic_years = Academic_year::get();
        return view('livewire.academic-year.year-index', compact('academic_years'));
    }

    public function DeleteOnYear($id){

        $this->delete_year = $id;

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
        $academic_years = Academic_year::findOrfail($this->delete_year);
        $academic_years->delete();
        $this->alert('success', 'លុបជោគជ័យ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]);
    }
}

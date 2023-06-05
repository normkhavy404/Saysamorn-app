<?php

namespace App\Http\Livewire\AcademicYear;

use App\Models\Academic_year;
use Livewire\Component;

class YearShow extends Component
{
    public $academic_years;
    public function render()
    {
        return view('livewire.academic-year.year-show');
    }
    public function mount($id){
        $this->academic_years = Academic_year::find($id);
    }
}
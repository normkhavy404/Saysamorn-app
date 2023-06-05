<?php

namespace App\Http\Livewire\AcademicYear;

use App\Models\Academic_year;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class YearIndex extends Component
{
    public function render()
    {
        $academic_years = Academic_year::get();
        return view('livewire.academic-year.year-index', compact('academic_years'));
    }

    public function DeleteOnYear($id){
        $academic_years = Academic_year::findOrfail($id);
        $academic_years->delete();
    }
}
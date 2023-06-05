<?php

namespace App\Http\Livewire\AcademicYear;

use App\Models\Academic_year;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class YearEdit extends Component
{
    public $name_year, $start_date, $end_date , $status , $year_id;

    public function mount($id){
        $academic_years   = Academic_year::find($id);
        $this->name_year  = $academic_years->name_year;
        $this->start_date = $academic_years->start_date;
        $this->end_date   = $academic_years->end_date;
        $this->status     = $academic_years->status;
        $this->year_id    = $academic_years->id;

    }

    public function YearUpdate(){
        $academic_years                 = Academic_year::find($this->year_id);
        $academic_years->name_year      = $this->name_year;
        $academic_years->start_date     = $this->start_date;
        $academic_years->end_date       = $this->end_date;
        $academic_years->status         = $this->status;
        if($academic_years->save()){
            return to_route('year_index');
        }
    }

    public function render()
    {
        $academic_years = DB::table('academic_years')->get();
        return view('livewire.academic-year.year-edit', compact('academic_years'));
    }
}
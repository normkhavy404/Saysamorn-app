<?php

namespace App\Http\Livewire\AcademicYear;

use App\Models\Academic_year;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class YearCreate extends Component
{
    public $name_year , $start_date, $end_date, $status ;
    protected $rules = [
        'name_year'  =>  'required',
        'start_date' =>  'required',
        'end_date'   =>  'required',
        'status'     =>  'required'

    ];

    public function render()
    {
        $academic_years = DB::table('academic_years')->get();
        return view('livewire.academic-year.year-create', compact('academic_years'));
    }
    public function YearOnCreate(){
        $this->validate();
        $academic_years = new Academic_year();
        $academic_years->name_year = $this->name_year;
        $academic_years->start_date =$this->start_date;
        $academic_years->end_date = $this->end_date;
        $academic_years->status = $this->status;
        if($academic_years->save()){
            return to_route('year_index');
        }
    }
}
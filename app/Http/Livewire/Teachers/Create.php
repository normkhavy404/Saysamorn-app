<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $code, $first_name ,$last_name ,$gender ,$telephone , $email,  $teacher_id;
    protected $rules = [
        'code'       => 'required',
        'first_name' => 'required',
        'last_name'  => 'required',
        'gender'     => 'required',
        'telephone'  => 'required'
    ];
    protected $messages = [
        'code.required'   => 'សូមបំពេញអត្ដលេខ',
        'first_name.required' => 'សូមបំពេញនាមត្រកូល',
        'last_name.required' => 'សូមបំពេញនាមខ្លួន',
        'gender.required' => 'សូមបំពេញភេទ',
        'telephone.required' => 'សូមបំពេញលេខទូរស័ព្ទ',

    ];
    public function render()
    {
        $teachers = DB::table('teachers')->get();
        return view('livewire.teachers.create', compact('teachers'));
    }

    public function submit(){
        $this->validate();
        $teachers = new Teacher();
        $teachers->code = $this->code;
        $teachers->first_name = $this->first_name;
        $teachers->last_name = $this->last_name;
        $teachers->gender = $this->gender;
        $teachers->telephone = $this->telephone;
        $teachers->email = $this->email;

        if($teachers->save()) {
            return to_route('index');
        }
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use App\Models\Role as ModelsRole;
use Livewire\Component;

class Role extends Component
{
    public $pers = [];
    public $role_name = '', $role_id;

    public function render()
    {
        $permission = Permission::all();
        $roles = ModelsRole::all();
        return view('livewire.role', compact('permission','roles'));
    }
    public function save(){
        if($this->role_id){
            //edit
            $roles = ModelsRole::find($this->role_id);
            $roles->title = $this->role_name;
            $roles->save();
            $roles->permissions()->sync($this->pers);
        }else {
            //create
            $roles =  new ModelsRole();
            $roles->title = $this->role_name;
            $roles->save();
            $roles->permissions()->attach($this->pers);
            $this->reset(['role_name', 'pers']);
        }
    }
    public function edit($id){
        $roles = ModelsRole::find($id);
        $this->pers = $roles->permissions->pluck('id');
        $this->role_name = $roles->title;
        $this->role_id = $roles->id;
    }
}
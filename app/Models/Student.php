<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'code',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'fa_name',
        'mo_name'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academic_class_student extends Model
{
    use HasFactory;
    protected $table = 'academic_class_student';
    protected $fillable =[
        'student_id',
        'academic_class_id',
        'status'
    ];
}

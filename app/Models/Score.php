<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = [
        'academic_class_student_id',
        'semester',
        'type',
        'khmer',
        'math',
        'science',
        'socail'
    ];
}

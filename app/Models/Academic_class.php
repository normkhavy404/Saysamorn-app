<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_class extends Model
{
    use HasFactory;
    protected $fillable =[
        'name_class',
        'teacher_id',
        'academic_year_id'
    ];

    public function academicYear()
    {
        return $this->belongsTo(Academic_year::class);
    }
}

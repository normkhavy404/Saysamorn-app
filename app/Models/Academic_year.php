<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Academic_year extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_year',
        'start_date',
        'end_date',
        'status'
    ];
}

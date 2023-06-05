<?php

namespace Database\Seeders;

use App\Models\Academic_class;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Academic_classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academic_class =[
            [
                'id'                    => 1,
                'name_class'            => 6 ,
                'teacher_id'            => 1,
                'academic_year_id'      => 1
            ],
            [
                'id'                    => 2,
                'name_class'            => 5,
                'teacher_id'            => 2,
                'academic_year_id'      => 1
            ],
    ];
    Academic_class::insert($academic_class);
    }
}
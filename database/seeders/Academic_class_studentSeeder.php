<?php

namespace Database\Seeders;

use App\Models\academic_class_student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Academic_class_studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academic_class_student       =[
            [
                'student_id'          => 2,
                'academic_class_id'   => 2,
                'status'              => 1
            ]
        ];
        academic_class_student::insert($academic_class_student);
    }
}

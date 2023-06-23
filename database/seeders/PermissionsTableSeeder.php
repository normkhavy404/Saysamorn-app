<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
            [
                'id'    => 2,
                'title' => 'task_access',
            ],
            [
                'id'    => 3,
                'title' => 'role_access',
            ],
            [
                'id'    => 4,
                'title' => 'teacher_access',
            ],
            [
                'id'    => 5,
                'title' => 'student_access',
            ],
            [
                'id'    => 6,
                'title' => 'academic_year_access',
            ],
            [
                'id'    => 7,
                'title' => 'academic_class_access',
            ],
            [
                'id'    => 8,
                'title' => 'academic_class_student_access',

            ],
            [
                'id'    => 9,
                'title' => 'attendent_access',
            ],
            [
                'id'    => 10,
                'title' => 'score_access',
            ],
        ];

        Permission::insert($permissions);
    }
}

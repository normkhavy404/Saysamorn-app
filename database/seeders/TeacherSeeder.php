<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers =[
                [
                    'id'              => 1,
                    'code'            => '101',
                    'first_name'      => 'Chea',
                    'last_name'       => 'Ouchi',
                    'gender'          => '1',
                    'telephone'       => '0918273636',
                    'email'           => null
                ],
                [
                    'id'              => 2,
                    'code'            => '102',
                    'first_name'      => 'Name',
                    'last_name'       => 'Khavy',
                    'gender'          => '2',
                    'telephone'       => '0319668615',
                    'email'           => null
                ],
        ];
        Teacher::insert($teachers);
    }
}
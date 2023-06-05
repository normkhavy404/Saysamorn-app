<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students =[
            [
                'id'              => 1,
                'code'            => '101',
                'first_name'      => 'Sok',
                'last_name'       => 'Nea',
                'gender'          => '1',
                'dob'       => '2012-02-09',
                'fa_name'  => 'Pot Sok',
                'mo_name'  => 'Sok Pisey'
            ],
            [
                'id'              => 2,
                'code'            => '102',
                'first_name'      => 'Srey',
                'last_name'       => 'Pov',
                'gender'          => '2',
                'dob'             => '2011-03-01',
                'fa_name'         => 'Kok Srey',
                'mo_name'         => 'KK NU'
            ],
    ];
    Student::insert($students);
    }
}
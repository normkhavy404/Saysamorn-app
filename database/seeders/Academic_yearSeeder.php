<?php

namespace Database\Seeders;

use App\Models\Academic_year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Academic_yearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academic_years =[
            [
                'id'              => 1,
                'name_year'            => '2023',
                'start_date'      => '2023-01-01',
                'end_date'       => '2023-06-06',
                'status'          => '1',
            ],
            [
                'id'              => 2,
                'name_year'            => '2023',
                'start_date'      => '2023-06-06',
                'end_date'       => '2023-12-12',
                'status'          => '2',
            ],
    ];
    Academic_year::insert($academic_years);
    }
}

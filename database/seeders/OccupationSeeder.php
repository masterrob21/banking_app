<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('occupations')->insert([
            ['occupation' => 'Veterinarian'],
            ['occupation' => 'Electrician'],
            ['occupation' => 'Accountant'],
            ['occupation' => 'Carpenter'],
            ['occupation' => 'Consultant'],
            ['occupation' => 'Architect'],
            ['occupation' => 'Dentist'],
            ['occupation' => 'Baker'],
            ['occupation' => 'Trader'],
            ['occupation' => 'Teacher'],
            ['occupation' => 'Technician'],
            ['occupation' => 'Pharmacist'],
            ['occupation' => 'Doctor'],
            ['occupation' => 'Nurse'],
            ['occupation' => 'Plumber'],
            ['occupation' => 'Engineer'],
            ['occupation' => 'Actor'],
            ['occupation' => 'Mechanic'],
            ['occupation' => 'Security Personnel'],
            ['occupation' => 'Civil Engineer'],
            ['occupation' => 'Businessman'],
            ['occupation' => 'Businesswoman'],
            ['occupation' => 'Driver'],
            ['occupation' => 'Mason'],
            ['occupation' => 'Tyler'],
            ['occupation' => 'Tailer'],
            ['occupation' => 'Seamstress'],
        ]);
    }
}

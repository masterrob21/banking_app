<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            ['region' => 'Greater Accra'],
            ['region' => 'Volta'],
            ['region' => 'Ashanti'],
            ['region' => 'Central'],
            ['region' => 'Northern'],
            ['region' => 'Eastern'],
            ['region' => 'Western'],
            ['region' => 'Upper West'],
            ['region' => 'Upper East'],
            ['region' => 'Brong Ahafo'],
            ['region' => 'North East'],
            ['region' => 'Oti'],
            ['region' => 'Western North'],
            ['region' => 'Ahafo'],
            ['region' => 'Bono East'],
            ['region' => 'Savannah']
        ]);
    }
}

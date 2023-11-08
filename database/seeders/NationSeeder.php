<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nations')->insert([
            ['nation' => 'Ghanaian'],
            ['nation' => 'Nigerian'],
            ['nation' => 'Togolese'],
            ['nation' => 'Ivorian'],
        ]);
    }
}

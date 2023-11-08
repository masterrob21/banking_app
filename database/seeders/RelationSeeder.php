<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            ['relation' => 'Son'],
            ['relation' => 'Daughter'],
            ['relation' => 'Mother'],
            ['relation' => 'Father'],
            ['relation' => 'In-law'],
            ['relation' => 'Sister'],
            ['relation' => 'Brother'],
            ['relation' => 'Cousin'],
        ]);
    }
}

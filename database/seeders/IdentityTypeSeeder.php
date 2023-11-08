<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('identity_types')->insert([
            ['identityType' => 'Ghana Card'],
            ['identityType' => 'Passport'],
            ['identityType' => 'Voters ID'],
        ]);
    }
}

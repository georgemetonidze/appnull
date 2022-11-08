<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->insert([
            'name' => 'GEORGIA',
            'created_at' => now(),
        ]);
        DB::table('countries')->insert([
            'name' => 'USA',
            'created_at' => now(),
        ]);
        DB::table('countries')->insert([
            'name' => 'CANADA',
            'created_at' => now(),
        ]);
        DB::table('countries')->insert([
            'name' => 'FRANCE',
            'created_at' => now(),

        ]);
    }
}

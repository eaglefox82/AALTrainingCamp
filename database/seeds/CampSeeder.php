<?php

use Illuminate\Database\Seeder;
use DB;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('camp_mappings')->insert([
            'year' => '2022',
            'start_date' => '2022-08-05',
            'end_date' => '2021-08-07',
            'theme' => 'Core Values',
            'location' => 'Galston Gorge',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

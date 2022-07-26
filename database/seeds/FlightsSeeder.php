<?php

use Illuminate\Database\Seeder;

use App\Flights;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Flights::truncate();

        Flights::create(['id' => '1', 'camp_id' => '1', 'flight_number' => '1', 'flight_name' => 'Executive Flight']);
        Flights::create(['id' => '2', 'camp_id' => '1', 'flight_number' => '2', 'flight_name' => 'Officers']);
        Flights::create(['id' => '3', 'camp_id' => '1', 'flight_number' => '3', 'flight_name' => 'Cadets']);
        Flights::create(['id' => '4', 'camp_id' => '1', 'flight_number' => '4', 'flight_name' => 'Junior Cadets']);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Unit::truncate();

        Unit::create(['id' => 1, 'Unit' => 'Albion Park']);
        Unit::create(['id' => 2, 'Unit' => 'Sutherland Shire']);
        Unit::create(['id' => 3, 'Unit' => 'Maitland']);
        Unit::create(['id' => 4, 'Unit' => 'Taree']);
        Unit::create(['id' => 5, 'Unit' => 'Coffs Harbour']);
        Unit::create(['id' => 6, 'Unit' => 'Leeton/Narrandera']);
        Unit::create(['id' => 7, 'Unit' => 'City of Canberra']);
        Unit::create(['id' => 8, 'Unit' => 'Tamworth']);
        Unit::create(['id' => 9, 'Unit' => 'Mudgee']);
        Unit::create(['id' => 10, 'Unit' => 'Belmont']);
        Unit::create(['id' => 11, 'Unit' => 'Toukley']);
        Unit::create(['id' => 12, 'Unit' => 'Doyalson']);
        Unit::create(['id' => 13, 'Unit' => 'Ryde']);
        Unit::create(['id' => 14, 'Unit' => 'Canterbury']);
        Unit::create(['id' => 15, 'Unit' => 'Manly']);
        Unit::create(['id' => 16, 'Unit' => 'Epping']);
        Unit::create(['id' => 17, 'Unit' => 'Hornsby RSL']);
        Unit::create(['id' => 18, 'Unit' => 'Edmondson Park']);
        Unit::create(['id' => 19, 'Unit' => 'Mount Pritchard']);
        Unit::create(['id' => 20, 'Unit' => 'Southern Highlands']);
        Unit::create(['id' => 21, 'Unit' => 'Camden']);
        Unit::create(['id' => 22, 'Unit' => 'Richmond']);
        Unit::create(['id' => 23, 'Unit' => 'City of Blacktown Boys']);
        Unit::create(['id' => 24, 'Unit' => 'City of Blacktown Girls']);
        Unit::create(['id' => 25, 'Unit' => 'Penrith']);
        Unit::create(['id' => 26, 'Unit' => 'Riverwood']);
        Unit::create(['id' => 27, 'Unit' => 'Rockdale']);
        Unit::create(['id' => 28, 'Unit' => 'Marrickville']);
        Unit::create(['id' => 29, 'Unit' => 'Parramatta']);
        Unit::create(['id' => 30, 'Unit' => 'Padstow']);
        Unit::create(['id' => 31, 'Unit' => 'Moorebank']);
        Unit::create(['id' => 32, 'Unit' => 'NSW Group']);
        Unit::create(['id' => 33, 'Unit' => 'Lawrence Hargrave Wing']);
        Unit::create(['id' => 34, 'Unit' => 'Ross Smith Wing']);
        Unit::create(['id' => 35, 'Unit' => 'Sadler Wing']);
        Unit::create(['id' => 36, 'Unit' => 'Southern Cross Wing']);
        Unit::create(['id' => 37, 'Unit' => 'Ilma Nicholson Wing']);
        Unit::create(['id' => 38, 'Unit' => 'Hinkler-Ulm Wing']);
        Unit::create(['id' => 39, 'Unit' => 'Robey Wing']);
        Unit::create(['id' => 40, 'Unit' => 'Kerr Wing']);
        Unit::create(['id' => 41, 'Unit' => 'Kingsford Smith Wing']);
        Unit::create(['id' => 42, 'Unit' => 'Keith Smith Wing']);
    }
}

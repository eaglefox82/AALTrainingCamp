<?php

use Illuminate\Database\Seeder;
use units;

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

        DB::table('units')->insert([
            'unit' => 'Albion Park'
        ]);

        DB::table('units')->insert([
            'unit' => 'Sutherland Shire'
        ]);

        DB::table('units')->insert([
            'unit' => 'Maitland'
        ]);

        DB::table('units')->insert([
            'unit' => 'Taree'
        ]);

        DB::table('units')->insert([
            'unit' => 'Coffs Harbour'
        ]);

        DB::table('units')->insert([
            'unit' => 'Leeton/Narrandera'
        ]);

        DB::table('units')->insert([
            'unit' => 'City of Canberra'
        ]);

        DB::table('units')->insert([
            'unit' => 'Tamworth'
        ]);

        DB::table('units')->insert([
            'unit' => 'Mudgee'
        ]);

        DB::table('units')->insert([
            'unit' => 'Belmont'
        ]);

        DB::table('units')->insert([
            'unit' => 'Toukley'
        ]);

        DB::table('units')->insert([
            'unit' => 'Doyalson'
        ]);

        DB::table('units')->insert([
            'unit' => 'Ryde'
        ]);

        DB::table('units')->insert([
            'unit' => 'Canterbury'
        ]);

        DB::table('units')->insert([
            'unit' => 'Manly'
        ]);

        DB::table('units')->insert([
            'unit' => 'Epping'
        ]);

        DB::table('units')->insert([
            'unit' => 'Hornsby RSL'
        ]);

        DB::table('units')->insert([
            'unit' => 'Edmondson Park'
        ]);

        DB::table('units')->insert([
            'unit' => 'Mount Pritchard'
        ]);

        DB::table('units')->insert([
            'unit' => 'Southern Highlands'
        ]);

        DB::table('units')->insert([
            'unit' => 'Camden'
        ]);

        DB::table('units')->insert([
            'unit' => 'Richmond'
        ]);

        DB::table('units')->insert([
            'unit' => 'City of Blacktown Boys'
        ]);

        DB::table('units')->insert([
            'unit' => 'City of Blacktown Girls'
        ]);

        DB::table('units')->insert([
            'unit' => 'Penrith'
        ]);

        DB::table('units')->insert([
            'unit' => 'Riverwood'
        ]);

        DB::table('units')->insert([
            'unit' => 'Rockdale'
        ]);

        DB::table('units')->insert([
            'unit' => 'Marrickville'
        ]);

        DB::table('units')->insert([
            'unit' => 'Parramatta'
        ]);

        DB::table('units')->insert([
            'unit' => 'Padstow'
        ]);

        DB::table('units')->insert([
            'unit' => 'Moorebank'
        ]);

        DB::table('units')->insert([
            'unit' => 'NSW Group'
        ]);

        DB::table('units')->insert([
            'unit' => 'Lawrence Hargrave Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Ross Smith Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Sadler Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Southern Cross Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Ilma Nicholson Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Hinker-Ulm Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Robey Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Kerr Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Kingsford Smith Wing'
        ]);

        DB::table('units')->insert([
            'unit' => 'Keith Smith Wing'
        ]);
    }
}

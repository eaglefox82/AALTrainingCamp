<?php

use Illuminate\Database\Seeder;
use App\Campmapping;

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

        Campmapping::truncate();

        $campmapping = new Campmapping;
        $campmapping->year = '1';
        $campmapping->start_date = '2022-08-05';
        $campmapping->end_date = '2022-08-07';
        $campmapping->theme = 'Core Values';
        $campmapping->location = 'Galston Gorge';
        $campmapping->save();

    }
}

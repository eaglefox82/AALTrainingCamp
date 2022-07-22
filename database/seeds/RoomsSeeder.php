<?php

use Illuminate\Database\Seeder;

Use App\Rooms;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Rooms::truncate();

        Rooms::create(['id' => 1, 'name' => 'Valleyview']);
        Rooms::create(['id' => 2, 'name' => 'TreeTops']);
        Rooms::create(['id' => 3, 'name' => 'Gymnasium 1']);
        Rooms::create(['id' => 4, 'name' => 'Gymnasium 2']);
        Rooms::create(['id' => 5, 'name' => 'Initiatives Course - 3D Spiderweb']);
        Rooms::create(['id' => 6, 'name' => 'Initiatives Course - Tyre Puzzle']);
        Rooms::create(['id' => 7, 'name' => 'Initiatives Course - Plank Bridge']);
        Rooms::create(['id' => 8, 'name' => 'Initiatives Course - Offset See-Saw']);
        Rooms::create(['id' => 9, 'name' => 'Parade Ground']);
        Rooms::create(['id' => 10, 'name' => 'Eaglesview']);
        Rooms::create(['id' => 11, 'name' => 'Mess Hall']);
    }
}

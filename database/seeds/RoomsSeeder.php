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
        Rooms::create(['id' => 1, 'name' => 'Gymnasium 1']);
        Rooms::create(['id' => 2, 'name' => 'Gymnasium 2']);
        Rooms::create(['id' => 1, 'name' => 'Initiatives Course']);
        Rooms::create(['id' => 2, 'name' => 'Parade Ground']);
        Rooms::create(['id' => 1, 'name' => 'Eaglesview']);
        Rooms::create(['id' => 2, 'name' => 'Mess Hall']);
    }
}

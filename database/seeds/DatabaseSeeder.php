<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(CampSeeder::class);
         $this->call(UnitsSeeder::class);
         $this->call(HutsSeeder::class);
         $this->call(RoomsSeeder::class);
         $this->call(TimetableSeeder::class);
    }
}

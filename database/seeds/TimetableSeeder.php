<?php

use Illuminate\Database\Seeder;

use App\Timetable;

class TimetableSeeder extends Seeder
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

        Rooms::create(['id' => 1, 'camp_id' => '1', 'name' => 'Arrival', 'start_time' => '18:00', 'end_time' => '21:00', 'day' => '1']);
        Rooms::create(['id' => 2, 'camp_id' => '1', 'name' => 'First Parade', 'start_time' => '21:00', 'end_time' => '22:00', 'day' => '1']);
        Rooms::create(['id' => 3, 'camp_id' => '1', 'name' => 'Light Out', 'start_time' => '22:00', 'end_time' => '22:00', 'day' => '1']);
        Rooms::create(['id' => 4, 'camp_id' => '1', 'name' => 'Reveille', 'start_time' => '07:00', 'end_time' => '07:00', 'day' => '2']);
        Rooms::create(['id' => 5, 'camp_id' => '1', 'name' => 'Flag Rise', 'start_time' => '07:15', 'end_time' => '07:30', 'day' => '2']);
        Rooms::create(['id' => 6, 'camp_id' => '1', 'name' => 'Breakfast', 'start_time' => '07:30', 'end_time' => '08:30', 'day' => '2']);
        Rooms::create(['id' => 7, 'camp_id' => '1', 'name' => 'Period 1', 'start_time' => '09:00', 'end_time' => '10:00', 'day' => '2']);
        Rooms::create(['id' => 8, 'camp_id' => '1', 'name' => 'Morning Tea', 'start_time' => '10:00', 'end_time' => '10:30', 'day' => '2']);
        Rooms::create(['id' => 9, 'camp_id' => '1', 'name' => 'Period 2', 'start_time' => '10:30', 'end_time' => '11:30', 'day' => '2']);
        Rooms::create(['id' => 10, 'camp_id' => '1', 'name' => 'Period 3', 'start_time' => '11:45', 'end_time' => '12:45', 'day' => '2']);
        Rooms::create(['id' => 11, 'camp_id' => '1', 'name' => 'Lunch', 'start_time' => '12:45', 'end_time' => '13:45', 'day' => '2']);
        Rooms::create(['id' => 12, 'camp_id' => '1', 'name' => 'Period 4', 'start_time' => '13:45', 'end_time' => '14:45', 'day' => '2']);
        Rooms::create(['id' => 13, 'camp_id' => '1', 'name' => 'Period 5', 'start_time' => '15:00', 'end_time' => '16:00', 'day' => '2']);
        Rooms::create(['id' => 14, 'camp_id' => '1', 'name' => 'Period 6', 'start_time' => '16:30', 'end_time' => '17:00', 'day' => '2']);
        Rooms::create(['id' => 15, 'camp_id' => '1', 'name' => 'Flag Fall', 'start_time' => '17:00', 'end_time' => '17:10', 'day' => '2']);
        Rooms::create(['id' => 16, 'camp_id' => '1', 'name' => 'Showers', 'start_time' => '17:15', 'end_time' => '18:15', 'day' => '2']);
        Rooms::create(['id' => 17, 'camp_id' => '1', 'name' => 'Dinner', 'start_time' => '18:30', 'end_time' => '19:30', 'day' => '2']);
        Rooms::create(['id' => 18, 'camp_id' => '1', 'name' => 'Evening Project', 'start_time' => '19:30', 'end_time' => '22:30', 'day' => '2']);
        Rooms::create(['id' => 19, 'camp_id' => '1', 'name' => 'Lights Out', 'start_time' => '22:30', 'end_time' => '22:30', 'day' => '2']);

       
        Rooms::create(['id' => 20, 'camp_id' => '1', 'name' => 'Reveille', 'start_time' => '07:00', 'end_time' => '07:00', 'day' => '3']);
        Rooms::create(['id' => 21, 'camp_id' => '1', 'name' => 'Flag Rise', 'start_time' => '07:15', 'end_time' => '07:30', 'day' => '3']);
        Rooms::create(['id' => 22, 'camp_id' => '1', 'name' => 'Breakfast', 'start_time' => '07:30', 'end_time' => '08:30', 'day' => '3']);
        Rooms::create(['id' => 23, 'camp_id' => '1', 'name' => 'Period 1', 'start_time' => '09:00', 'end_time' => '10:00', 'day' => '3']);
        Rooms::create(['id' => 24, 'camp_id' => '1', 'name' => 'Morning Tea', 'start_time' => '10:00', 'end_time' => '10:30', 'day' => '3']);
        Rooms::create(['id' => 25, 'camp_id' => '1', 'name' => 'Period 2', 'start_time' => '10:30', 'end_time' => '11:30', 'day' => '3']);
        Rooms::create(['id' => 26, 'camp_id' => '1', 'name' => 'Period 3', 'start_time' => '11:45', 'end_time' => '12:45', 'day' => '3']);
        Rooms::create(['id' => 27, 'camp_id' => '1', 'name' => 'Lunch', 'start_time' => '12:45', 'end_time' => '13:45', 'day' => '3']);
        Rooms::create(['id' => 28, 'camp_id' => '1', 'name' => 'Period 4', 'start_time' => '13:45', 'end_time' => '14:45', 'day' => '3']);
        Rooms::create(['id' => 29, 'camp_id' => '1', 'name' => 'Period 5', 'start_time' => '15:00', 'end_time' => '16:00', 'day' => '3']);



    }
}

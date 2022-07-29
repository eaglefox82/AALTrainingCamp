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

        Timetable::truncate();

        Timetable::create(['id' => 1, 'camp_id' => '1', 'name' => 'Arrival', 'start_time' => '18:00:00', 'end_time' => '21:00:00', 'day' => '1']);
        Timetable::create(['id' => 2, 'camp_id' => '1', 'name' => 'First Parade', 'start_time' => '21:00:00', 'end_time' => '22:00:00', 'day' => '1']);
        Timetable::create(['id' => 3, 'camp_id' => '1', 'name' => 'Light Out', 'start_time' => '22:00:00', 'end_time' => '22:00:00', 'day' => '1']);
        Timetable::create(['id' => 4, 'camp_id' => '1', 'name' => 'Reveille', 'start_time' => '06:45:00', 'end_time' => '07:00:00', 'day' => '2']);
        Timetable::create(['id' => 5, 'camp_id' => '1', 'name' => 'Flag Rise', 'start_time' => '07:00:00', 'end_time' => '07:20:00', 'day' => '2']);
        Timetable::create(['id' => 6, 'camp_id' => '1', 'name' => 'Breakfast', 'start_time' => '07:30:00', 'end_time' => '08:30:00', 'day' => '2']);
        Timetable::create(['id' => 7, 'camp_id' => '1', 'name' => 'Period 1', 'start_time' => '08:40:00', 'end_time' => '09:20:00', 'day' => '2']);
        Timetable::create(['id' => 8, 'camp_id' => '1', 'name' => 'Period 2', 'start_time' => '09:30:00', 'end_time' => '10:10:00', 'day' => '2']);
        Timetable::create(['id' => 9, 'camp_id' => '1', 'name' => 'Morning Tea', 'start_time' => '10:20:00', 'end_time' => '10:40:00', 'day' => '2']);
        Timetable::create(['id' => 10, 'camp_id' => '1', 'name' => 'Period 3', 'start_time' => '10:50:00', 'end_time' => '11:30:00', 'day' => '2']);
        Timetable::create(['id' => 11, 'camp_id' => '1', 'name' => 'Period 4', 'start_time' => '11:40:00', 'end_time' => '12:20:00', 'day' => '2']);
        Timetable::create(['id' => 12, 'camp_id' => '1', 'name' => 'Lunch', 'start_time' => '12:30:00', 'end_time' => '13:30:00', 'day' => '2']);
        Timetable::create(['id' => 13, 'camp_id' => '1', 'name' => 'Period 5', 'start_time' => '13:40:00', 'end_time' => '14:20:00', 'day' => '2']);
        Timetable::create(['id' => 14, 'camp_id' => '1', 'name' => 'Period 6', 'start_time' => '15:00:00', 'end_time' => '15:40:00', 'day' => '2']);
        Timetable::create(['id' => 15, 'camp_id' => '1', 'name' => 'Afternoon Tea', 'start_time' => '16:00:00', 'end_time' => '16:20:00', 'day' => '2']);
        Timetable::create(['id' => 16, 'camp_id' => '1', 'name' => 'Flag Fall', 'start_time' => '16:30:00', 'end_time' => '16:45:00', 'day' => '2']);
        Timetable::create(['id' => 17, 'camp_id' => '1', 'name' => 'Drill', 'start_time' => '16:50:00', 'end_time' => '17:30:00', 'day' => '2']);
        Timetable::create(['id' => 18, 'camp_id' => '1', 'name' => 'Showers and Dress for Dinner', 'start_time' => '17:40:00', 'end_time' => '18:20:00', 'day' => '2']);
        Timetable::create(['id' => 19, 'camp_id' => '1', 'name' => 'Formal Dinner', 'start_time' => '18:30:00', 'end_time' => '19:30:00', 'day' => '2']);
        Timetable::create(['id' => 20, 'camp_id' => '1', 'name' => 'Special Presentation', 'start_time' => '19:45:00', 'end_time' => '21:45:00', 'day' => '2']);
        Timetable::create(['id' => 21, 'camp_id' => '1', 'name' => 'Super', 'start_time' => '22:00:00', 'end_time' => '22:30:00', 'day' => '2']);
        Timetable::create(['id' => 22, 'camp_id' => '1', 'name' => 'Lights Out', 'start_time' => '22:30:00', 'end_time' => '22:30:00', 'day' => '2']);


        Timetable::create(['id' => 23, 'camp_id' => '1', 'name' => 'Reveille', 'start_time' => '06:45:00', 'end_time' => '07:00:00', 'day' => '3']);
        Timetable::create(['id' => 24, 'camp_id' => '1', 'name' => 'Flag Rise', 'start_time' => '07:00:00', 'end_time' => '07:20:00', 'day' => '3']);
        Timetable::create(['id' => 25, 'camp_id' => '1', 'name' => 'Breakfast', 'start_time' => '07:30:00', 'end_time' => '08:30:00', 'day' => '3']);
        Timetable::create(['id' => 26, 'camp_id' => '1', 'name' => 'Period 1', 'start_time' => '08:40:00', 'end_time' => '09:20:00', 'day' => '3']);
        Timetable::create(['id' => 27, 'camp_id' => '1', 'name' => 'Period 2', 'start_time' => '09:30:00', 'end_time' => '10:10:00', 'day' => '3']);
        Timetable::create(['id' => 28, 'camp_id' => '1', 'name' => 'Morning Tea', 'start_time' => '10:20:00', 'end_time' => '10:40:00', 'day' => '3']);
        Timetable::create(['id' => 29, 'camp_id' => '1', 'name' => 'Period 3', 'start_time' => '10:50:00', 'end_time' => '11:30:00', 'day' => '3']);
        Timetable::create(['id' => 30, 'camp_id' => '1', 'name' => 'Period 4', 'start_time' => '11:40:00', 'end_time' => '12:20:00', 'day' => '3']);
        Timetable::create(['id' => 31, 'camp_id' => '1', 'name' => 'Lunch', 'start_time' => '12:30:00', 'end_time' => '13:30:00', 'day' => '3']);
        Timetable::create(['id' => 32, 'camp_id' => '1', 'name' => 'Clean Grounds & Rooms', 'start_time' => '13:40:00', 'end_time' => '14:10:00', 'day' => '3']);
        Timetable::create(['id' => 33, 'camp_id' => '1', 'name' => 'Pack Up & Prepare for Final Parade', 'start_time' => '14:20:00', 'end_time' => '14:50:00', 'day' => '3']);
        Timetable::create(['id' => 34, 'camp_id' => '1', 'name' => 'Final Parade', 'start_time' => '15:00:00', 'end_time' => '16:00:00', 'day' => '3']);



    }
}

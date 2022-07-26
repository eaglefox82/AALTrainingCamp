<?php

use Illuminate\Database\Seeder;

Use App\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        lesson::truncate();

        lesson::create(['id' => 1, 'camp_id' => '1', 'name' => '6 Hats']);
        lesson::create(['id' => 2, 'camp_id' => '1', 'name' => 'Core Values']);
        lesson::create(['id' => 3, 'camp_id' => '1', 'name' => 'Effective Communication']);
        lesson::create(['id' => 4, 'camp_id' => '1', 'name' => 'Mentorship']);
        lesson::create(['id' => 5, 'camp_id' => '1', 'name' => 'Drill']);
        lesson::create(['id' => 6, 'camp_id' => '1', 'name' => 'Team Building 1']);
        lesson::create(['id' => 7, 'camp_id' => '1', 'name' => 'Team Building 2']);
        lesson::create(['id' => 8, 'camp_id' => '1', 'name' => 'Team Building 3']);
        lesson::create(['id' => 9, 'camp_id' => '1', 'name' => 'Team Building 4']);
        lesson::create(['id' => 10, 'camp_id' => '1', 'name' => 'Mystery 1']);
        lesson::create(['id' => 11, 'camp_id' => '1', 'name' => 'Mystery 2']);
        lesson::create(['id' => 12, 'camp_id' => '1', 'name' => 'Mystery 3']);
        lesson::create(['id' => 13, 'camp_id' => '1', 'name' => 'Band Practical']);
        lesson::create(['id' => 14, 'camp_id' => '1', 'name' => 'Band Practical']);
        lesson::create(['id' => 15, 'camp_id' => '1', 'name' => 'Clean & Pack Up']);
        lesson::create(['id' => 16, 'camp_id' => '1', 'name' => 'Closing Parade']);



    }
}

<?php

use App\User;
use App\Member;
use App\Squadron;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

		$admin = new User();
		$admin->firstname = "Brendan";
		$admin->lastname = "Fox";
		$admin->username = "b.fox";
		$admin->password = bcrypt('n18094');
        $admin->save();

        $admin = new User();
		$admin->firstname = "Tim";
		$admin->lastname = "Larkin";
		$admin->username = "t.larkin";
		$admin->password = bcrypt('goblin');
        $admin->save();

        $admin = new User();
        $admin->firstname = "Test";
        $admin->lastname = "User";
        $admin->username = "t.user";
        $admin->password = bcrypt('abc123');
        $admin->save();

    }
}

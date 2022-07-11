<?php

use Illuminate\Database\Seeder;
use APP\User;

class UserSeeder extends Seeder
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
		$admin->firstname = "James";
		$admin->lastname = "Chapman";
		$admin->username = "j.chapman";
		$admin->password = bcrypt('n17487');
        $admin->save();

        $admin = new User();
		$admin->firstname = "Pam";
		$admin->lastname = "Price";
		$admin->username = "p.price";
		$admin->password = bcrypt('w11506');
        $admin->save();

        $admin = new User();
		$admin->firstname = "Jeff";
		$admin->lastname = "Remington";
		$admin->username = "j.remington";
		$admin->password = bcrypt('w8228');
        $admin->save();

        $admin = new User();
		$admin->firstname = "Brendan";
		$admin->lastname = "Gregory";
		$admin->username = "b.gregory";
		$admin->password = bcrypt('n17890');
        $admin->save();

        $admin = new User();
		$admin->firstname = "David";
		$admin->lastname = "Harker";
		$admin->username = "d.harker";
		$admin->password = bcrypt('n8363');
        $admin->save();

        $admin = new User();
		$admin->firstname = "Karam";
		$admin->lastname = "Mandwie";
		$admin->username = "k.mandwie";
		$admin->password = bcrypt('n21758');
        $admin->save();

    }
}

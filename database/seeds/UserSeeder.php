<?php

use Illuminate\Database\Seeder;
use App\User;

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
		$admin->first_name = "Brendan";
		$admin->last_name = "Fox";
		$admin->username = "b.fox";
		$admin->password = bcrypt('n18094');
        $admin->save();

        $admin = new User();
		$admin->first_name = "Tim";
		$admin->last_name = "Larkin";
		$admin->username = "t.larkin";
		$admin->password = bcrypt('goblin');
        $admin->save();

        $admin = new User();
		$admin->first_name = "James";
		$admin->last_name = "Chapman";
		$admin->username = "j.chapman";
		$admin->password = bcrypt('n17487');
        $admin->save();

        $admin = new User();
		$admin->first_name = "Pam";
		$admin->last_name = "Price";
		$admin->username = "p.price";
		$admin->password = bcrypt('w11506');
        $admin->save();

        $admin = new User();
		$admin->first_name = "Jeff";
		$admin->last_name = "Remington";
		$admin->username = "j.remington";
		$admin->password = bcrypt('w8228');
        $admin->save();

        $admin = new User();
		$admin->first_name = "Brendan";
		$admin->last_name = "Gregory";
		$admin->username = "b.gregory";
		$admin->password = bcrypt('n17890');
        $admin->save();

        $admin = new User();
		$admin->first_name = "David";
		$admin->last_name = "Harker";
		$admin->username = "d.harker";
		$admin->password = bcrypt('n8363');
        $admin->save();

        $admin = new User();
		$admin->first_name = "Karam";
		$admin->last_name = "Mandwie";
		$admin->username = "k.mandwie";
		$admin->password = bcrypt('n21758');
        $admin->save();

        $admin = new User();
        $admin->first_name = "Peter";
        $admin->last_name = "Gledhill";
        $admin->username = "p.gledhill";
        $admin->password = bcrypt('n8313');
        $admin->save();

    }
}

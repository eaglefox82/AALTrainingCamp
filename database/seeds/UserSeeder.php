<?php

use Illuminate\Database\Seeder;
use DB;

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
        DB::table('users')->insert([
            'first_name' => 'Brendan',
            'last_name' => 'Fox',
            'username' => 'b.fox',
            'password' => bcrypt('n18094'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

         DB::table('users')->insert([
            'first_name' => 'James',
            'last_name' => 'Chapman',
            'username' => 'j.champman',
            'password' => bcrypt('n17487'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'first_name' => 'Pam',
            'last_name' => 'Price',
            'username' => 'p.price',
            'password' => bcrypt('w11506'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'first_name' => 'Jeff',
            'last_name' => 'Remington',
            'username' => 'j.remington',
            'password' => bcrypt('n8228'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

         DB::table('users')->insert([
            'first_name' => 'Brendan',
            'last_name' => 'Gregory',
            'username' => 'b.gregory',
            'password' => bcrypt('n17890'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

         DB::table('users')->insert([
            'first_name' => 'David',
            'last_name' => 'Harker',
            'username' => 'd.harker',
            'password' => bcrypt('n8363'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'first_name' => 'Karam',
            'last_name' => 'Mandwie',
            'username' => 'k.mandwie',
            'password' => bcrypt('n21758'),
            'created_at' => now(),
            'updated_at' => now()
        ]);



    }
}

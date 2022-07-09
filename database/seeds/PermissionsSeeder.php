<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //create permissions
        Permission::create(['name' => 'create_users']);
        Permission::create(['name' => 'sms']);

        //create roles and assign created permissions
        $role1 = Role::create(['name' => 'Super User']);
        $role1->givePermissionTo('create_users');
        $role1->givePermissionTo('sms');

        $role2 = Role::create(['name' => 'User']);

        $role3 = Role::create(['name' => 'Super Admin']);


        $user = \App\User::Where('username', 'b.fox')->first();
        $user->assignRole($role1);

        $user = \App\User::where('id', '3')->get();
        $user->assignRole($role2);




    }
}

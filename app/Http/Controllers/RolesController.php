<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    //

    public function updateroles()

    {
        $role = 'Admin';

        $permission = 'SMS';

        $role->givePermissionTo($permission);



    }
}

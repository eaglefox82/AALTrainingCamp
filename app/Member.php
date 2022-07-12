<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Member_mapping;

class Member extends Model
{
    //

    public function unitmap()
    {
        return $this->hasOne('App\Unit', 'id', 'unit_id');
    }

    public function membermap()
    {
        return $this->hasOne('App\member_mapping', 'member_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


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

    public function foodrequirements()
    {
        return $this->hasOne('App\Food', 'member_id', 'id');
    }


}

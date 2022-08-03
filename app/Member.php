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
        return $this->hasOne('App\Membermapping', 'member_id', 'id');
    }

    public function foodrequirements()
    {
        return $this->hasOne('App\Food', 'member_id', 'id');
    }

    public function note()
    {
        return $this->hasMany('App\Note', 'member_id', 'id');
    }

    public function medical()
    {
        return $this->hasMany('App\Medical', 'member_id', 'id');
    }

    public function food()
    {
        return $this->hasMany('App\Food', 'member_id', 'id');
    }


}

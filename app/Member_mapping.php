<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member_mapping extends Model
{
    //

    public function member()
    {
        return $this->hasOne('App\Member', 'id', 'member_id');
    }

    public function flight()
    {
        return $this->hasOne('App\Flights', 'id', 'flight_id');
    }

    public function room()
    {
        return $this->hasOne('App\Huts', 'id', 'hut_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membermapping extends Model
{
    //

    protected $table = 'member_mappings';

    public function member()
    {
        return $this->hasOne('App\Member', 'id', 'member_id');
    }

    public function room()
    {
        return $this->hasOne('App\huts', 'id', 'hut_id');
    }

    public function flight()
    {
        return $this->hasOne('App\Flights', 'id', 'flight_id');
    }

}

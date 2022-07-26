<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    //


    public function mapping()
    {
        return $this->belongsTo('App\Membermapping', 'flight_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessionMapping extends Model
{
    //

    public function lession()
    {
        return $this->belongsTo('App\Lessions');
    }

    public function flight()
    {
        return $this->belongsTo('App\Flights');
    }

    public function timetable()
    {
        return $this->belongsTo('App\Timetable');
    }

    public function room()
    {
        return $this->belongsTo('App\Rooms');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Instructors');
    }


}

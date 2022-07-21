<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonMapping extends Model
{
    //

    public function lession()
    {
        return $this->belongsTo('App\Lesson');
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

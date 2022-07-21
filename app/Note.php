<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //

    public function membernotes()
    {
        return $this->belongsTo('App\Member', 'member_id', 'id');
    }
}

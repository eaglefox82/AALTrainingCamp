<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //

    protected $table = 'food_requirements';

    public function member()
    {
        return $this->belongsTo('App\Member', 'member_id', 'id');
    }
}

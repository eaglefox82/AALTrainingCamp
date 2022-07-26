<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huts extends Model
{
    //

    public function mapping()
    {
        return $this->hasMany('App\Membermapping', 'hut_id', 'id');
    }
}

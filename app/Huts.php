<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huts extends Model
{
    //

    public function mapping()
    {
        return $this->belongsTo('App\Member_mapping', 'hut_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medical extends Model
{
    //
    protected $table = 'medical_conditiions';

    public function member()
    {
        return $this->belongsTo('App\Member');
    }
}

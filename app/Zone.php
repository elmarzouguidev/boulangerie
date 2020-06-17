<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    //

    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }

    public function bakeries()
    {
        return $this->hasMany('App\Bakery');
    }
}

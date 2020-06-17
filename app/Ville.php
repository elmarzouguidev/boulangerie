<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //

    public function pay()
    {
        return $this->belongsTo('App\Pay');
    }

    public function zones()
    {
       return $this->hasMany('App\Zone');
    }

    public function bakeries()
    {
        return $this->hasMany('App\Bakery');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //

    public function bakery()
    {
        return $this->belongsTo('App\Bakery');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    public function bakery()
    {
        return $this->belongsTo('App\Bakery');
    }
}

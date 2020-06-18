<?php

/**
 * @Author : Elmarzougui Abdelghafour
 * @facebook : https://facebook.com/devscript
 * @linkedIn :https://www.linkedin.com/in/devscript/
 * @twitter  :https://twitter.com/devscriptt
 */

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

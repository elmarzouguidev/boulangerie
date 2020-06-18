<?php
/**
 * @Author : Elmarzougui Abdelghafour
 * @facebook : https://facebook.com/devscript
 * @linkedIn :https://www.linkedin.com/in/devscript/
 * @twitter  :https://twitter.com/devscriptt
 */

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

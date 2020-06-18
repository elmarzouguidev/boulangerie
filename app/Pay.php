<?php
/**
 * @Author : Elmarzougui Abdelghafour
 * @facebook : https://facebook.com/devscript
 * @linkedIn :https://www.linkedin.com/in/devscript/
 * @twitter  :https://twitter.com/devscriptt
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    //

    public function villes()
    {
        return $this->hasMany('App\Ville');
    }
    
}

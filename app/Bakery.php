<?php
/**
 * @Author : Elmarzougui Abdelghafour
 * @facebook : https://facebook.com/devscript
 * @linkedIn :https://www.linkedin.com/in/devscript/
 * @twitter  :https://twitter.com/devscriptt
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bakery extends Model
{
    //

    /* protected $fillable = [

    ];
*/

    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }

    public function zone()
    {
        return $this->belongsTo('App\Zone'); 
    }

    public function shops()
    {
        return $this->hasMany('App\Shop');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}

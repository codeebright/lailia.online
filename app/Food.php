<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Food extends Model
{
    //
     use SoftDeletes;
    //belongs to one
    public function foodMenus()
    {
        return $this->belongsTo('App\FoodMenu');
    }
}

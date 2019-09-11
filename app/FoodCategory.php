<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class FoodCategory extends Model
{
    //
    use SoftDeletes;

    //belongs to one food menu
    public function foodMenus()
    {
        return $this->belongsTo('App\FoodMenu');
    }

}

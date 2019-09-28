<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // belongsTo foodMenu
    public function foodMenus()
    {
        return $this->hasMany(FoodMenu::class,'food_id','id');
    }
}

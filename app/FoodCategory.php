<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    // belongsTo
    public function foodMenus()
    {
        return $this->belongsTo(FoodMenu::class);
    }
}

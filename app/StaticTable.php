<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticTable extends Model
{
    // belongsTo foodMenu
    public function foodMenus()
    {
        return $this->belongsTo(FoodMenu::class);
    }
}

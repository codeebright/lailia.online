<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    // has foods
    public function foods()
    {
        return $this->belongsTo(Food::class,'food_id','id');
    }

    public function foodCategories()
    {
        return $this->hasMany(FoodCategory::class);
    }
}

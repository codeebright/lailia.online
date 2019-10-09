<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeekDay extends Model
{
    // belongsTo hostel
    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
    }

    // hasMany foodCategories
    public function foodCategories()
    {
        return $this->hasMany(FoodCategory::class);
    }

    // hasMany foods
    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function abc()
    {
        return $this->hasMany(FoodMenu::class);
    }
}

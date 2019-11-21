<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //belongsTo Hostel
    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
    }

    // belongsTo foodMenu
    public function foodCategories()
    {
        return $this->belongsTo(FoodCategory::class);
    }

    // belongsTo weekDay
    public function weekDays()
    {
        return $this->belongsTo(WeekDay::class);
    }


}

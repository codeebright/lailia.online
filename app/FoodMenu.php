<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    //belongsTo hostel
    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
    }

    // hasMany foods
    public function foods()
    {
        return $this->belongsTo(Food::class,'food_id','id');
    }

    //hasMany foodCategory
    public function categories()
    {
        return $this->belongsTo(FoodCategory::class,'food_category_id','id');
    }

    //hasMany weekDays
    public function weekDays()
    {
        return $this->belongsTo(WeekDay::class,'week_days_id','id');
    }



}

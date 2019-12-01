<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{

    // belongsTo hostels
    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
    }

}

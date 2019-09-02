<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class FoodMenu extends Model
{
    //
    use SoftDeletes;

    //has many foodCategory

    public function foodCategory()
    {
        return $this->hasMany('App\FoodCategory');
    }

    //belongs to hostel
    public function hostels()
    {
        return $this->belongsTo('App\Hostel');
    }

    //has many food
    public function food()
    {
        return $this->hasMany('App\Food');
    }

    //has many static table
    public function staticTables()
    {
        return $this->hasMany('App\StaticTable');
    }


}

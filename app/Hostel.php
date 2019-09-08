<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hostel extends Model
{
    //User Soft Delete
    use SoftDeletes;

    public function facilities()
    {
        return $this->hasMany('App\Facility');
    }

    //HasMany Rooms
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    //HasMany Customer
    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    //HasMany Attachment
    public function attachments()
    {
        return $this->hasMany('App\Attachment');
    }
    
    //Has One Owner 
    public function owners()
    {
        return $this->belongsTo('App\Owner');
    }

    //HasMany Details
    public function hostelDetails()
    {
        return $this->hasMany('App\HostelDetails');
    }

    //Has One Address
    public function address()
    {
        return $this->hasMany('App\Address');
    }

    //HasMany Food Menu
    public function foodMenus()
    {
        return $this->hasMany('App\FoodMenu');
    }



}


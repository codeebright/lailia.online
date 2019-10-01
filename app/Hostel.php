<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    // has one details
    public function hostelDetails()
    {
      return $this->hasOne(HostelDetails::Class);
    }

    //has many rooms
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    // hostel has one address
    public function addresses()
    {
      return $this->hasOne(Address::class);
    }

    // hostel has facilities
    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    // hostel has food_menu
    public function foodMenus()
    {
        return $this->hasOne(FoodMenu::class);
    }
}

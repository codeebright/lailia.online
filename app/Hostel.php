<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    protected $guarded = ['fb'];
    // has one details
    public function hostelDetails()
    {
      return $this->hasOne(HostelDetails::Class);
    }

    // hostel has one address
    public function address()
    {
      return $this->hasOne(Address::class);
    }

    // hostel has facilities
    public function facility()
    {
        return $this->hasMany(Facility::class);
    }

    // hostel has food_menu
    public function foodMenus()
    {
        return $this->hasOne(FoodMenu::class);
    }

        // hostel has many photos
        public function attachments()
        {
            return $this->hasMany(Attachment::class);
        }
    // hostel has many rooms
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}

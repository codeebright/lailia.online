<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate($int)
 */
class Hostel extends Model
{
    // hasMany Attachments
    public function attachments()
    {
        return $this->hasMany(Attachment::Class);
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

    // hasMany weekDays
    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    //hostel has food_menu
    public function foodCategories()
    {
        return $this->hasMany(FoodCategory::class);
    }
}

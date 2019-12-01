<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate($int)
 */
class Hostel extends Model
{
    protected $guarded = ['fb'];
    // has one details
    public function hostelDetails()
    {
        return $this->hasMany(Attachment::Class);
    }

    // has many Hostels photo
    public function hostelPhotos()
    {
        return $this->hasMany(HostelPhoto::class);
    }

    //has many rooms
    public function rooms()
    {
        return $this->hasMany(Room::class);
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
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}

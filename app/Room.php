<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_number' , 'area' , 'total_bed' ,'empty_bed' , 'room_description' , 'room-rent' , 'food_service'];

    // rooms belongs to hostel

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }
    public function attachment()
    {
        return $this->hasMany(Attachment::class);
    }
}

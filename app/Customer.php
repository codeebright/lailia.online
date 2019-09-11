<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    //Use SoftDeletes
    use SoftDeletes;

    // belongs to hostel
    public function hostels()
    {
        return $this->belongsTo('App\Hostel');
    }
    // belongs to room
    public function Rooms()
    {
        return $this->belongsTo('App\Room');
    }

}

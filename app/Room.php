<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //belongsTo hostel
    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
    }
}

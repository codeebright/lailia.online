<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model{
    // facilities belongsTo hostel
    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
    }
}
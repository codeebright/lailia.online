<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Facility extends Model{
    // facilities belongsTo hostel
    protected $fillable = ['facility_name'];
    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}

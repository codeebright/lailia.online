<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // Address belongs to hostel
    public function hostels()
    {
      return $this->belongsTo(Hostel::class);
    }
}

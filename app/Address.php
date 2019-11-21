<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // Address belongs to hostel
    public function hostel()
    {
      return $this->belongsTo(Hostel::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Address extends Model
{
//    use Searchable;
    // Address belongs to hostel
    public function hostels()
    {
      return $this->belongsTo(Hostel::class);
    }
}

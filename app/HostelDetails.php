<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class HostelDetails extends Model
{
    // user softDeletes
      use SoftDeletes;

    // belongs to hostel

    public function hostels()
    {
        return $this->belongsTo('App\Hostel');
    }
}

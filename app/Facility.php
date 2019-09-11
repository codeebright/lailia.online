<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class facilities extends Model
{
    //User Soft Delete
    use SoftDeletes;

   //belongs to hostel
    public function hostels()
    {
        return $this->belongsTo('App\Hostel');
    }
}

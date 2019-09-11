<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    //Use Soft Deletes 
    use SoftDeletes;

    //Belongs to One Hostel
    public function hostels()
    {
        return $this->belongsTo('App\Hostel');
    }


}

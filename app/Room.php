<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Room extends Model
{
    //
    use SoftDeletes;
    //has many customer
    public function Customer()
    {
        return $this->hasMany('App\Customer');
    }

    // belongs to hostel
    public function hostels()
    {
        return $this->belongsTo('App\Hostel');
    }

    // hasMany attachments
    public function attachments()
    {
        return $this->hasMany('App\Attachment');
    }

}

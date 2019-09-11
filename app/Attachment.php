<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    //Use Soft Deletes
    use SoftDeletes;

    //Belongs to One Hostel
    public function hostels()
    {
        return $this->belongsTo('App\Hostel');
    }

    //Belongs to One Rooms
    public function Rooms()
    {
        return $this->belongsTo('App\Room');
    }


    //Belongs to One Owners
    public function Owners()
    {
        return $this->belongsTo('App\Owner');
    }




}

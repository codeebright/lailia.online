<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelDetails extends Model
{

    protected $primarykey = 'id';


    public function attachments()
    {
      return $this->hasMany(Attachment::class,'detail_id','id');
    }

    //Details belongsTo hostel
    public function hostels()
    {
      return $this->belongsTo(Hostel::class);
    }
}

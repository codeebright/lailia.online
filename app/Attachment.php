<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $primarykey = 'file_id';
    protected $fillable = ['file_size'];


    public function hosteDetails()
    {
      return $this->belongsTo(HostelDetails::class);
    }

    public function homes()
    {
      return $this->belongsTo(Home::class);
    }
}

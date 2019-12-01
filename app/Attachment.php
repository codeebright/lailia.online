<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $primarykey = 'file_id';
    protected $fillable = ['file_size' , 'file_path'];


    public function hostels()
    {
      return $this->belongsTo(Hostel::class);
    }

    public function homes()
    {
      return $this->belongsTo(Home::class);
    }

    public function rooms()
    {
      return $this->belongsTo(Hostel::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelPhoto extends Model
{
    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $table = 'owners';
    protected $guarded = 'LinkedIn';

    // hostel has hostel
    public function hostel()
    {
        return $this->hasMany(Hostel::class);
    }
}

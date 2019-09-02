<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Owner extends Model
{
    // user softDeletes
    use SoftDeletes;

    //Has many Attachment
    public function Attachments()
    {
        return $this->hasMany('App\Attachment');
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Owner extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'confirm_password', 'phone_number' , 'last_name'
    ];
    // user softDeletes
    use SoftDeletes;
    //protected  $table ='';

    //Has many Attachment
    public function Attachments()
    {
        return $this->hasMany('App\Attachment');
    }


}

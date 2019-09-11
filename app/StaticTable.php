<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class StaticTable extends Model
{
    //
    use SoftDeletes;

    // belongs to food Menu

    public function foodMenu()
    {
        return $this->belongsTo('App\FoodMenu');
    }
}

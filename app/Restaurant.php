<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['city_id', 'description', 'food_type'];

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}

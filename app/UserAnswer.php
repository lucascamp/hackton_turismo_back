<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $fillable = ['user_id', 'city_id','question', 'answer'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_answers()
    {
        return $this->hasMany('App\UserAnswer');
    }

    public function photos()
    {
        return $this->hasMany('App\Photos');
    }

    public function trips()
    {
        return $this->hasMany('App\Trips');
    }

    public function restaurant()
    {
        return $this->hasMany('App\Restaurant');
    }
}

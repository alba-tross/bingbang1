<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seeker extends Authenticatable
{
    //
    use Notifiable;

    protected $guard = 'seeker';

    protected $fillable = ['name','email','password'];

    protected $hidden = ['password','remember_token'];


public function jobs(){
	
	return $this->belongsToMany('App\Job');
}
}
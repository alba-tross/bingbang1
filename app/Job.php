<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
	protected $fillable = [
	     'name', 
		 'company_id',
		 'description',
		 'url'
		 ];



public function companies(){
	
	return $this->belongsToMany('App\Company');
}

public function seekers(){
	
	return $this->belongsToMany('App\Seeker');

}
}
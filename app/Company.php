<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
	
	protected $fillable = [
	     'Company_name',
		 'address',
		 'phone',
		 'website',
		 'city',
		 'country',
		 'logo',
		 'cover_photo',
	     'slogan',
		 'description'
            
		 
		 
		 ];
}




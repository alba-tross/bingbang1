<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSekeer extends Model
{
    //
	
	protected $fillable = [
		'seeker_id',
		'job_id',
		'date_applied', 
		 'data'
		 ];
}


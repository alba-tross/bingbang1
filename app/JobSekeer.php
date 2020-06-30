<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSekeer extends Model
{
    //
	
	protected $fillable = [
	     'date_applied', 
		 'job_id',
		 'seeker_id',
		 'data'
		 ];
}


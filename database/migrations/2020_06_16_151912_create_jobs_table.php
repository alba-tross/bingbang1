<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('seeker_id');
			$table->integer('company_id')->unsigned();
            $table->string('title');
            $table->longText('description');
            $table->string('category_id');
            $table->string('position');
            $table->string('status');
            $table->string('type');
            $table->string('last_date');
            $table->string('address');
            $table->timestamps();
    
        });
		
		Schema::create('job_seeker', function (Blueprint $table) {
            $table->bigIncrements('id');
			// date_applied
			$table->date('date_applied');
			// job_id
			$table->integer('job_id')->unsigned();
			// seeker_id
			$table->integer('seeker_id')->unsigned();
			// attached_cv
			$table->binary('data');
			// resume
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}

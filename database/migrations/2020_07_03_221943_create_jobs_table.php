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
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
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
            // job_id
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs');
			// seeker_id
            $table->integer('seeker_id')->unsigned();
            $table->foreign('seeker_id')->references('id')->on('seekers');
			// date_applied
			$table->date('date_applied');
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

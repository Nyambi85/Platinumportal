<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName');
            $table->string('Location');
            $table->string('industries');
            $table->string('natureOfBussinaes');
            $table->string('jobTitle');
            $table->string('jobType');
            $table->string('start');
            $table->string('finish');
            $table->string('salary');
            $table->string('reasonForLeaving');
            $table->integer('userCVID')->unsigned();
            $table->timestamps();
        });

        Schema::table('job_histories',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('userCVID')->references('id')->on('user_c_vs');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_histories');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobID')->unsigned();
            $table->string('coverLetter');
            $table->integer('ampitutudeResult')->nullable();
            $table->string('resultStatus')->nullable();
            $table->integer('userId')->unsigned();
            $table->integer('amptitudeID')->unsigned();
            $table->timestamps();
        });


        Schema::table('applied_jobs',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('userId')->references('id')->on('users');
        });


        Schema::table('applied_jobs',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('jobID')->references('id')->on('jobs');
        });

        Schema::table('applied_jobs',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('amptitudeID')->references('id')->on('ampitetude_tests');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applied_jobs');
    }
}

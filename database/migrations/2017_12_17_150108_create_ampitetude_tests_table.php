<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmpitetudeTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ampitetude_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('testName');
            $table->string('testLink');
            $table->integer('jobID')->unsigned();
            $table->timestamps();
        });


        Schema::table('ampitetude_tests',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('jobID')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ampitetude_tests');
    }
}

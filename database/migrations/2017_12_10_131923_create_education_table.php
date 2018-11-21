<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('educationLevel');
            $table->string('institutionName');
            $table->string('location');
            $table->string('course');
            $table->string('startYear')->nullable();
            $table->string('finalYear')->nullable();
            $table->integer('userCVID')->unsigned();
            $table->timestamps();
        });

        Schema::table('education',function (Blueprint $table){

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
        Schema::dropIfExists('education');
    }
}

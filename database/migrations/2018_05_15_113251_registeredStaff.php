<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegisteredStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
    public function up()
    {
        Schema::create('registeredStaffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staffName');
            $table->string('staffMail');
            $table->integer('department_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('registeredStaffs',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('department_id')->references('id')->on('departments');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
    public function down()
    {
        Schema::dropIfExists('registeredStaffs');
    }*/
}

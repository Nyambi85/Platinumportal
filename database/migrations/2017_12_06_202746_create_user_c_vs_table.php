<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_c_vs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('Surname');
            $table->string('passprtPicture');
            $table->string('dateOfBirth');
            $table->string('nationality');
            $table->string('gender');
            $table->string('race');
            $table->string('martalStatus');
            $table->string('numberOfDependencies');
            $table->string('driverLissence');
            $table->string('personalMobileNumber')->nullable();
            $table->string('homeNumber')->nullable();
            $table->string('mail')->nullable();
            $table->string('officeMail')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->integer('userId')->unsigned();
            $table->timestamps();

        });

        Schema::table('user_c_vs',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_c_vs');
    }
}

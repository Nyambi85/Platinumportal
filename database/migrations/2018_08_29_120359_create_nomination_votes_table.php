<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomination_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomineeName');
            $table->string('nomineeEmail');
            $table->string('nomineeTitle');
            $table->integer('departmentID')->unsigned();
            $table->integer('nominationID')->unsigned()->nullable();
            $table->text('teamworkCriteria');
            $table->text('perfomanceCriteria');
            $table->text('generlaCoonductCriteria');
            $table->text('customerServiceCriteria');
            $table->text('accomplishmentCriteria');
            $table->integer('voterID')->unsigned();
            $table->timestamps();
        });

        Schema::table('nomination_votes',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('departmentID')->references('id')->on('departments');
            $table->foreign('voterID')->references('id')->on('users');
            $table->foreign('nominationID')->references('id')->on('nominations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomination_votes');
    }
}

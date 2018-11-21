<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNominationId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
    public function up()
    {
        Schema::table('nomination_votes', function (Blueprint $table) {
            //
            //
            $table->integer('nominationID')->unsigned()->nullable();

            $table->foreign('nominationID')->references('id')->on('nominations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
    public function down()
    {
        Schema::table('nomination_votes', function (Blueprint $table) {
            //
        });
    }*/
}

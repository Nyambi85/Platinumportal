<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustommerQueryTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custommer_query_trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerContactQueryID')->unsigned();
            $table->integer('customerQuotationQueryID')->unsigned();
            $table->timestamps();
        });

        Schema::table('custommer_query_trackers',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('customerContactQueryID')->references('id')->on('custome_contanct_requests');
            $table->foreign('customerQuotationQueryID')->references('id')->on('customer_quote_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custommer_query_trackers');
    }
}

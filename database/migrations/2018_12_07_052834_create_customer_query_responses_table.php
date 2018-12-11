<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerQueryResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_query_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerNumberAvailability');
            $table->integer('numberOfDials');
            $table->string('customerType');
            $table->string('customerLocation');
            $table->string('productChoice');
            $table->string('gender');
            $table->text('queryDescription');
            $table->string('assignedTo');
            $table->integer('customerQueryTrackerID')->unsigned();
            $table->timestamps();
        });

        Schema::table('customer_query_responses',function (Blueprint $table){

            $table->engine = 'InnoDB';
            $table->foreign('customerQueryTrackerID')->references('id')->on('custommer_query_trackers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_query_responses');
    }
}

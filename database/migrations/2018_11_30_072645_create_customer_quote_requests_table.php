<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerQuoteRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_quote_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('requesterName');
            $table->string('requesterEmail');
            $table->string('requesterMobilenumber');
            $table->string('requesterProduct');
            $table->string('requesterLocation');
            $table->string('requesterJob');
            $table->string('requesterJobLocation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_quote_requests');
    }
}

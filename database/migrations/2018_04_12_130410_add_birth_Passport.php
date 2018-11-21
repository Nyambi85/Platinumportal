<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBirthPassport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
	Schema::table('user_c_vs', function($table) {
        	$table->string('birthPassport');
    	});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

	Schema::table('user_c_vs', function($table) {
        	$table->dropColumn('birthPassport');
    	});

    }
}

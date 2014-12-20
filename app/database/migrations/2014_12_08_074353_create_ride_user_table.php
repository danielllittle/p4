<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRideUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('ride_user', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('ride_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('ride_id')->references('id')->on('rides');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('ride_user');
	}

}

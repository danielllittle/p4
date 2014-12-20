<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        	Schema::create('users', function($t) {
                	$t->increments('id');
                	$t->string('username', 16);
                	$t->string('password', 64);
                	$t->string('email', 64);
                    $t->boolean('admin', true);
                    $t->rememberToken();
			$t->timestamps();
        	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
        User::create(array('password' => Hash::make('cheese'), 'username' => 'mickey', 'email' => 'mickey@home.com'));
        User::create(array('password' => Hash::make('quack'), 'username' => 'donald', 'email' => 'donald@duckdynasty.com'));
        /**User::create(array('password' => Hash::make('cheese'), 'username' => 'Mickey', 'email' => 'mickey@home.com'));
        User::create(array('password' => Hash::make('cheese'), 'username' => 'Mickey', 'email' => 'mickey@home.com'));
        User::create(array('password' => Hash::make('cheese'), 'username' => 'Mickey', 'email' => 'mickey@home.com'));
        User::create(array('password' => Hash::make('cheese'), 'username' => 'Mickey', 'email' => 'mickey@home.com'));*/

	}

}

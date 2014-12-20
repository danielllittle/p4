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
        User::create(array('password' => Hash::make('happy'), 'username' => 'walt', 'email' => 'walt@dland.com'));
        User::create(array('password' => Hash::make('honey'), 'username' => 'Pooh', 'email' => 'winnie@forest.com'));
        User::create(array('password' => Hash::make('sword'), 'username' => 'Hook', 'email' => 'captain@sea.com'));
        User::create(array('password' => Hash::make('teacup'), 'username' => 'Cinderella', 'email' => 'cinderella@castle.com'));
        User::create(array('password' => Hash::make('apple'), 'username' => 'Snow White', 'email' => 'snowwhite@dwarf.com'));

	}

}

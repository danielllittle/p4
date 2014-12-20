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
        User::create(array('password' => Hash::make('cheese'), 'username' => 'mickey', 'email' => 'mickey@home.com', 'admin'=> '1'));
        User::create(array('password' => Hash::make('quacks'), 'username' => 'donald', 'email' => 'donald@duckdynasty.com'));
        User::create(array('password' => Hash::make('happyplace'), 'username' => 'walt', 'email' => 'walt@dland.com'));
        User::create(array('password' => Hash::make('honeytree'), 'username' => 'Pooh', 'email' => 'winnie@forest.com'));
        User::create(array('password' => Hash::make('swords'), 'username' => 'Hook', 'email' => 'captain@sea.com', 'admin' => '1'));
        User::create(array('password' => Hash::make('coolsis'), 'username' => 'Cinderella', 'email' => 'cinderella@castle.com'));
        User::create(array('password' => Hash::make('applesnack'), 'username' => 'SnowWhite', 'email' => 'snowwhite@dwarf.com'));

	}

}

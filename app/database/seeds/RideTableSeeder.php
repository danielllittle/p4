<?php

class RideTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('rides')->delete();
        Ride::create(array('name' => 'SpaceMountain'));
        Ride::create(array('name' => 'Matterhorn'));
        Ride::create(array('name' => 'SmallWorld'));
        Ride::create(array('name' => 'TeaCups'));
        Ride::create(array('name' => 'BigThunder'));
        Ride::create(array('name' => 'StarTours'));



	}

}

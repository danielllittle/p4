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
        Ride::create(array('name' => 'SpaceMountain', 'projected' => 60));
        Ride::create(array('name' => 'Matterhorn', 'projected' => 35));
        Ride::create(array('name' => 'SmallWorld', 'projected' => 23));
        Ride::create(array('name' => 'TeaCups', 'projected'=> 15));
        Ride::create(array('name' => 'BigThunder', 'projected' => 29));
        Ride::create(array('name' => 'StarTours', 'projected' => 48));



	}

}

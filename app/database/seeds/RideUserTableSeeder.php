<?php

class RideUserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/*DB::table('rides')->delete();
        RideUser::create(array('ride_id' => '1', 'user_id' => 1));
        RideUser::create(array('ride_id' => '2', 'user_id' => 1));
        RideUser::create(array('ride_id' => '1', 'user_id' => 2));
        RideUser::create(array('ride_id' => '3', 'user_id' => 2));
        RideUser::create(array('ride_id' => '4', 'user_id' => 1));

        $ride = Ride::find(1);
        $ride->users()->sync(array($somePostID));

        $faker = Faker::create();

        $categoryIds = Category::lists('id');
        $postIds = Post::lists('id');

        foreach(range(1, 50) as $index)
        {
            $category = Category::find($faker->randomElement($categoryIds));
            $category->posts()->sync(array($faker->randomElement($postIDs)));
        }

*/

	}

}

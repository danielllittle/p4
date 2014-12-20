<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function availableRides()
    {
       $ids = \DB::table('ride_user')->where('user_id', '=', $this->id)->lists('ride_id');

        if (sizeof(array_filter($ids)) == 0)  {
            return Ride::all();
        } else {
            return Ride::whereNotIn('id', $ids)->get();

        }


    }

    public function associatedRides()
    {
        $ids = \DB::table('ride_user')->where('user_id', '=', $this->id)->lists('ride_id');
        if (sizeof(array_filter($ids)) > 0) {
            return Ride::whereIn('id', $ids)->get();
        }
        return $ids;
    }

    public function rides()
    {
        return $this->belongsToMany( 'Ride' ) ;
    }

    public function isAdmin() {
        return $this->admin <> 0;
    }

}

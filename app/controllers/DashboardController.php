<?php

class DashboardController extends BaseController {

    public function __construct() {
        $this->beforeFilter('auth');
    }
    /*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
        $availableRides = Auth::user()->availableRides();

        $myrides = Auth::user()->associatedRides();


        return View::make('user/dashboard')->with('myrides', $myrides)->with('availableRides',$availableRides)->with('flash_message', $myrides);
	}

}

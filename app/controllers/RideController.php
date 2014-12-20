<?php

class RideController extends BaseController
{

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->beforeFilter('auth');
        $this->beforeFilter('admin');

    }







    public function postAdmin()
    {
        $validatorRules = array(
            'rideid' => 'required|numeric|min:1',
            'projected' => 'required|numeric|min:0',
            'projected' => 'required|numeric|max:150'
        );

        $validator = Validator::make(Input::all(), $validatorRules);
        if ($validator->fails()) {
            return Redirect::to('ride/admin')->withErrors($validator);
        } else {
            $ride = Ride::find(Input::get('rideid'));
            $ride -> projected = Input::get('projected');
            $ride -> save();
            return Redirect::to('ride/admin')->with('flash_message', 'Ride successfully updated');
        }
    }

    public function getAdmin()
    {
        $allrides = Ride::all();
        return View::make('ride/admin')->with('allrides', $allrides);


    }


}
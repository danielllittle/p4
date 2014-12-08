<?php

class UserController extends BaseController
{

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function postLogin()
    {
        $validatorRules = array(
            'username' => 'required|alphaNum|min:6',
            'password' => 'required|alphaNum|min:6'
        );

        $validator = Validator::make(Input::all(), $validatorRules);
        if ($validator->fails()) {
            return Redirect::to('user/login')->withErrors($validator);
        } else {
            $userdata = Input::only('username', 'password');

            if (Auth::attempt($userdata, $remember = true)) {

                return Redirect::intended('/user/dashboard')->with('flash_message', 'Welcome Back!');
            }
            else {

                return Redirect::to('/home')->with('flash_message', 'Log in failed; please try again.');
            }
        }
    }

    public function getLogin()
    {
        return View::make('user/login');


    }

    public function getLogout()
    {
        Auth::logout();

        # Send them to the homepage
        return Redirect::to('/');


    }
}
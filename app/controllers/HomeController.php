<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello', array('Bob'));
	}

	public function sayHello($name)
	{
	    $data = array('name' => $name);
	    return View::make('my-first-view')->with($data);
	}

	public function showResume() {
		return View::make('resume');
	}

	public function showPortfolio() {
		return View::make('portfolio');
	}

	public function showSimon() {
		return View::make('simpleSimon');
	}

	public function getLogin()
    {
        return View::make('login');
    }

    public function postLogin()
    {

        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password]) ) {
            return Redirect::intended('/posts');
        } else {
            Session::flash('errorMessage', 'Invalid Login!');
            return Redirect::back()->withInput();
        }
    }

    public function getLogout()
    {
        Auth::Logout();
        return Redirect::action('PostsController@index');
    }

}

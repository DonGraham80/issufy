<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use AuthenticatesUsers;
use Input;
use Validator;
use Redirect;
use Hash; //Add this
 class Login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
protected $username = 'Email';


  public function showLogin()
{
    // show the form
    //return View::make('login');
}
 

public function doLogin(Request $request)
{

// validate the info, create rules for the inputs
$rules = array(
    'Email'    => 'required|email', // make sure the email is an actual email
    'Password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);

 

    // create our user data for the authentication
    $userdata = array(
        'email'     =>  $request->get('email'),
        'password'  =>  $request->get('password')
    );
 
    // attempt to do the login
    if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
         return redirect('customers');

    } else {        
print_r($userdata);
 return redirect('/');
        // validation not successful, send back to form 
       // return Redirect::to('login');
       print_r (dd(\DB::getQueryLog()));
 Log::debug('Log something');
    }


}

}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intro', function () {
    return view('customers.intro');
});


Route::resource('customers','CustomerController');

// route to show the login form
Route::get('login', array('uses' => 'Login@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'Login@doLogin'));

 
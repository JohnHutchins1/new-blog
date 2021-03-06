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



Route::get('/', 'HomeController@index')->name('main');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');




Route::get('places', 'ImageController@index');
Route::post('places', 'UserPicturesController@store');

//Route::resource('places', 'UserPicturesController');



//checks if the user is logged in, then sends them to the home page if not previouisly logged out
// Route::get('/', function () {
//     return redirect()->intended('home');
// });


// // route to show the login form
// Route::get('login', array('uses' => 'Auth\LoginController@showLogin'));

// // route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Auth::routes();



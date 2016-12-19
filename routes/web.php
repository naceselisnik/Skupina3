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
use App\Video;

Route::any('/','searchController@getVideo');
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/creators', function () {
    return view('creators');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::post('/registrationForm', 'RegistrationController@registrationForm');
Route::any('/loggedIn', 'LoginController@loggedIn');
Route::get('/logout', 'LogoutController@logout');
Route::any('/uploadvideo', 'UploadController@uploadvideo');
Route::get('/video/{video}', 'VideoController@showvideo');
Route::get('/deletevideo/{video}', 'DeleteController@deletevideo');
Route::get('/editvideo/{video}', 'EditController@edit');
Route::post('/updatevideo', 'EditController@update');

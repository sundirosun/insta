<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Larabros\Elogram\Client;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mongo', function() {
	$user = App\Media::all();
	echo json_encode($user);
});

Route::get('/feed','InstagramController@feed');
Route::post('/save','InstagramController@save');
Route::get('/media','InstagramController@media');
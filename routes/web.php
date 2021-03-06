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

Route::get('/', 'LandingController@landingIndex');
Route::post('something', 'LandingController@submitIndex');
Route::post('event/{id}', 'LandingController@eventIndex');
Route::get('/login', 'LoginController@index');

Route::get('events', 'EventController@index');              //GET ALL EVENTS
Route::get('events/create', 'EventController@create')->middleware('auth.basic');      //GET a form to post a event
Route::get('events/likes', 'EventController@likes');
Route::get('events/{id}', 'EventController@show');          //GET A SPECIFIC EVENT
Route::get('events/{id}/edit', 'EventController@edit');          //GET A SPECIFIC EVENT
Route::post('events', 'EventController@store')->middleware('auth.basic');             //POST A EVENT
Route::post('events/update', 'EventController@update')->middleware('auth.basic');             //POST A EVENT

Route::get('categories/{categoryName}', 'CategoryController@index');

Route::get('organisers/events', 'OrganiserController@events')->middleware('auth.basic');
Route::post('likes/{eventId}', 'LikeController@store');
Route::get('tests', function () {
    return view('test');
});


Auth::routes();;

Route::get('/home', 'HomeController@index')->name('home');

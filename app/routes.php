<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});*/

/*
Route::get('/yelp/{id}', function($id){
	$reviews = Yelp::reviews($id);
	dd($reviews->rating->toArray());


});*/

Route::get('/', 'YelpController@listReviews');
Route::get('yelp/{id}', function($id){

	$id = 1;
	$reviews = Yelp::reviews($id);
	
});
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generic',function() {
   return view('generic');
});
Route::get('/generic-detail/{id}',[
	'uses'=>'SearchController@genericDetail',
	'as'=>'genericDetail'
	]);
Route::group(array('prefix'=>'api'), function()
{
	Route::resource('search', 'SearchController', array('only' => 'show'));
    Route::resource('brand', 'BrandController', array('only' => 'show'));
			

});
Route::get('/brand',function() {
   return view('brand');
});

/*
Route::get('searchbrand/{term}',[
	'uses'=>'SearchController@showBrand',
	'as'=>'searchbrand'
	]);
	*/

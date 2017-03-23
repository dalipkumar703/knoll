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
    Route::get('brand/{brand}/{category}',[
    	'uses'=>'BrandController@showBrandDetail',
    	'as'=>'brand.detail'
    	]);
    Route::get('admin/{username}/{password}',[
    	'uses'=>'AdminController@login',
    	'as' =>'login',
    	]);
			

});
Route::group(array('prefix'=>'admin'),function() 
{
	//admin login page
  Route::get('/',function() {
   return view('admin.home');
  });
  //admin home page
  Route::get('/index','AdminController@indexShow');
  //logout admin area
  Route::get('/logout','AdminController@deleteSession');
  //generic add
   Route::post('generic/add',[
    'uses'=>'AdminController@addGeneric',
    'as'=>'addGeneric'
   	]); 
   //generic update
   Route::get('product/update/{id}',[
   	'uses'=>'AdminController@updateProduct',
     'as'=>'showUpdate'
   	]);
   //update generic value
      Route::post('product/updatevalue',[
   	'uses'=>'AdminController@updateProductValue',
   	'as'=>'updateProductValue'
   	]);
      //delete generic
      Route::get('product/delete/{id}',[
     'uses'=>'AdminController@deleteProduct',
     'as'=>'deleteProduct'
      	]);
      //brand add
      Route::post('brand/add',[
      	'uses'=>'AdminController@addBrand',
      	'as'=>'addBrand',
      	]);
      //brand updating
      Route::get('brand/update/{id}',[
       'uses'=>'AdminController@updateBrand',
       'as'=>'updateBrand',
      	]);
      //brand update
      Route::post('brand/updatevalue',[
      	'uses'=>'AdminController@updateBrandValue',
      	'as'=>'updateBrandValue',
      	]);
      //brand delete
      Route::get('brand/delete/{id}',[
      	'uses'=>'AdminController@deleteBrand',
      	'as'=>'deleteBrand',
      	]);
      //generic bulk add
      Route::post('product/bulk/add',[
      	'uses'=>'AdminController@postUpload',
         'as'=>'postUpload',
         ]);
      Route::post('brand/bulk/add',[
      	'uses'=>'AdminController@postUpload',
         'as'=>'postUpload',
         ]);
});
Route::get('/brand',function() {
   return view('brand');
});
Route::get('/about',function() {
   return view('about');
});
Route::get('/vision',function() {
   return view('vision');
});
Route::get('/enquiry',function() {
   return view('enquiry');
});
/*
Route::get('searchbrand/{term}',[
	'uses'=>'SearchController@showBrand',
	'as'=>'searchbrand'
	]);
	*/

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
   return view('welcome');
});

Route::get('/mail', ['as' => 'mail', function () {

}]);

Route::group(['namespace' => 'Ecommerce'], function(){

   Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

   Route::group(['prefix' => 'laptop', 'as' => 'laptop.'], function(){
      Route::get('all', ['as' => 'all', 'uses' => 'LaptopController@getAll']);
      Route::get('office', ['as' => 'office', 'uses' => 'LaptopController@getOffice']);
      Route::get('ultrabooks', ['as' => 'ultrabooks', 'uses' => 'LaptopController@getUltrabooks']);
      Route::get('product/{id}', ['as' => 'product', 'uses' => 'LaptopController@getProduct']);
      Route::get('filterByCompany', ['as' => 'filterByCompany', 'uses' => 'LaptopController@filterByCompany']);
      Route::get('filterOfficeByCompany', ['as' => 'filterOfficeByCompany', 'uses' => 'LaptopController@filterOfficeByCompany']);
      Route::get('filterUltrabooksByCompany', ['as' => 'filterUltrabooksByCompany', 'uses' => 'LaptopController@filterUltrabooksByCompany']);
   });

   Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
      Route::group(['middleware' => 'guest'], function(){
         Route::get('log_in', ['as' => 'log_in', 'uses' => 'UserController@getLogIn']);
         Route::post('log_in', ['as' => 'log_in', 'uses' => 'UserController@postLogIn']);
         Route::get('create', ['as' => 'create', 'uses' => 'UserController@getCreateAccount']);
         Route::post('create', ['as' => 'create', 'uses' => 'UserController@postCreateAccount']);
      });

      Route::group(['middleware' => 'auth'], function(){
         Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@getProfile']);
         Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@getLogout']);
         Route::get('whish_list/{user_id}', ['as' => 'whish_list', 'uses' => 'UserController@getWhishList']);
         Route::get('whish_list_delete/{id}', ['as' => 'whish_list_delete', 'uses' => 'UserController@getWhishListDelete']);
      });

   });

   Route::group(['prefix' => 'emails', 'as' => 'emails.'], function(){
      Route::group(['middleware' => 'auth'], function(){
         Route::get('send_wish_list/{id}', ['as' => 'send_wish_list', 'uses' => 'MailController@sendWishList']);
      });
   });

   Route::group(['prefix' => 'audio', 'as' => 'audio.'], function(){
      Route::get('all', ['as' => 'all', 'uses' => 'AudioController@getAll']);
      Route::get('headphone', ['as' => 'headphone', 'uses' => 'AudioController@getHeadphone']);
      Route::get('earphone', ['as' => 'earphone', 'uses' => 'AudioController@getEarphone']);
      Route::get('product/{id}', ['as' => 'product', 'uses' => 'AudioController@getProduct']);
   });
/*

   Route::group(['prefix' => 'monitor', 'as' => 'monitor.'], function(){
      Route::get('all', ['as' => 'all', 'uses' => 'MonitorController@getAll']);
      Route::get('lcd', ['as' => 'lcd', 'uses' => 'MonitorController@getLcd']);
      Route::get('led', ['as' => 'led', 'uses' => 'MonitorController@getLed']);
   });
*/
});

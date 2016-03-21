<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'index', 'uses' => 'LandingController@index'
]);
Route::get('kategori/{name}', [
	'as' => 'kategori-index', 'uses' => 'LandingController@kategori'
]);
Route::get('lihat/{judul}', [
	'as' => 'view-index', 'uses' => 'LandingController@view'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'kontent'], function(){
	    Route::get('/', [
	            'as' => 'blog-index', 'uses' => 'BlogController@index'
	        ]);
	    Route::get('/create', [
	            'as' => 'blog-create', 'uses' => 'BlogController@create'
	        ]);
	    Route::post('/store', [
	            'as' => 'blog-store', 'uses' => 'BlogController@store'
	        ]);
	    Route::get('/edit/{id}', [
	            'as' => 'blog-edit', 'uses' => 'BlogController@edit'
	        ]);
	    Route::patch('/update/{id}', [
	            'as' => 'blog-update', 'uses' => 'BlogController@update'
	        ]);
	    Route::get('/destroy/{id}', [
	            'as' => 'blog-destroy', 'uses' => 'BlogController@destroy'
	        ]);
    });

    Route::group(['prefix' => 'kategori'], function(){
	    Route::get('/', [
	            'as' => 'category-index', 'uses' => 'CategoryController@index'
	        ]);
	    Route::get('/create', [
	            'as' => 'category-create', 'uses' => 'CategoryController@create'
	        ]);
	    Route::post('/store', [
	            'as' => 'category-store', 'uses' => 'CategoryController@store'
	        ]);
	    Route::get('/edit/{id}', [
	            'as' => 'category-edit', 'uses' => 'CategoryController@edit'
	        ]);
	    Route::patch('/update/{id}', [
	            'as' => 'category-update', 'uses' => 'CategoryController@update'
	        ]);
	    Route::get('/destroy/{id}', [
	            'as' => 'category-destroy', 'uses' => 'CategoryController@destroy'
	        ]);
    });


});

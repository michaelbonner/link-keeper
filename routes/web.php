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

Auth::routes();

Route::group(['prefix'=> 'object','middleware'=>'auth'], function(){
	Route::get('/', 'ObjectController@index' );
	Route::get('/create', 'ObjectController@create' );
	Route::get('/{object}/edit', 'ObjectController@edit' );
	Route::get('/{object}', 'ObjectController@show' );
	Route::post('/', 'ObjectController@store' );
	Route::patch('/{object}', 'ObjectController@update' );
	Route::get('/delete/{object}', 'ObjectController@destroy' );
});

Route::group(['prefix'=> 'tag','middleware'=>'auth'], function(){
	Route::get('/', 'TagController@index' );
	Route::get('/create', 'TagController@create' );
	Route::get('/{tag}', 'TagController@show' );
	Route::post('/', 'TagController@store' );
	Route::patch('/{tag}', 'TagController@update' );
	Route::get('/delete/{tag}', 'TagController@destroy' );
});

Route::group(['prefix'=> 'link','middleware'=>'auth'], function(){
	Route::get('/create', 'LinkController@create' );
	Route::get('/{link}/edit', 'LinkController@edit' );
	Route::post('/', 'LinkController@store' );
	Route::patch('/{link}', 'LinkController@update' );
	Route::get('/delete/{link}', 'LinkController@destroy' );
});

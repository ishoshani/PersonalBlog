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

Route::get('/',"MyHomeController@index");
#blog routes
Route::get('/blog',"BlogController@index");
Route::post('/blog',"BlogController@post");
Route::delete('/blog/{id}',"BlogController@delete");
Route::get('/blog/{id}',"BlogController@indexWith");

Route::get('/writeNew',"NewStuffController@index");

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/projects', "ProjectController@index");
Route::get('/projects/{id}', "ProjectController@indexWith");


Route::post('/projects', "ProjectController@post");
Route::get('ardemo',"DemoController@index");
Auth::routes();

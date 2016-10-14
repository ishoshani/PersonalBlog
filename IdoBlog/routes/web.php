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

Route::get('/',"HomeController@index");
Route::post('/blog',"BlogController@post");
Route::delete('/blog/{$id}',"BlogController@delete");
Route::get('/blog/{id}',"BlogController@index");



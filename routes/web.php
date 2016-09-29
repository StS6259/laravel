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

Route::get('cabinet', ['uses' => 'CabinetController@index']);

Route::get('news', ['uses' => 'NewsController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('add',
    ['as' => 'news_add', 'uses' => 'CabinetController@create']);
Route::post('add',
    ['as' => 'news_store', 'uses' => 'CabinetController@store']);

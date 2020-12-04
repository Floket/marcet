<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ItemController@index');

Route::get('/item/{id}', 'ItemController@show');

Route::get('/admin', 'PostController@index');

Route::post('/admin', 'PostController@index')->name('updateItem');

Route::get('/update/{item}', 'PostController@show');

Route::get('/search/{search}', 'ItemController@search')->name('search');;

Route::get('/post', function (){
    return view('post');
});


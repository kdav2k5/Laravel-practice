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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/trees','PagesController@trees');

Route::post('/posts', 'PostController@index');

Route::resource('posts', 'PostController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

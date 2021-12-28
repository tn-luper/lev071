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

Route::get('/', 'PostController@index')->middleware('auth');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::delete('/posts/{post}', 'PostController@destroy');
Route::put('/posts/{post}', 'PostController@update');
Route::post('/posts', 'PostController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories/{category}', 'CategoryController@index');

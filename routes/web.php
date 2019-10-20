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

Route::get('/', 'todoc@index');

Route::get('todos', 'todoc@index');

Route::get('todos/{todo}','todoc@show');

Route::get('create','todoc@create');

Route::post('store-todo','todoc@store');

Route::get('todos/{todo}/edit','todoc@edit');


Route::post('update-todo/{todo}','todoc@update');
Route::get('todos/{todo}/delete','todoc@destroy');
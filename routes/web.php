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

Route::get('/', 'PagesController@home');



// Route::resource('students', 'PagesController');


Route::get('/contact', 'PagesController@contact');

Route::get('/students', 'PagesController@students');

Route::post('/students', 'PagesController@store');

Route::get('/students/create', 'PagesController@create');

Route::get('/students/{student}', 'PagesController@show');

Route::get('/students/{student}/edit', 'PagesController@edit');

Route::patch('/students/{student}', 'PagesController@update');

Route::delete('/students/{student}', 'PagesController@destroy');


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
    return view('homeguest');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'PagesController@getHome');

Route::get('/profile/{user}', 'UserController@edit')->name('profile');
Route::patch('/profile/{user}', 'UserController@update')->name('update');

Route::get('/history', 'PagesController@getHistory');
Route::get('/camera', 'PagesController@getCamera');


//Route::get('/profile/{user}', 'UserController@edit')

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

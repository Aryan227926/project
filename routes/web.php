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


Route::get('/users','UsersController@index')->name('users.index')->middleware('auth');
Route::get('/users/create','UsersController@create')->name('users.create');
Route::post('/users/store','UsersController@store')->name('users.store');
Route::get('/users/delete/{id}','UsersController@delete')->name('users.delete');
Route::get('/users/edit/{id}','UsersController@edit')->name('users.edit');
Route::post('/users/update/{id}','UsersController@update')->name('users.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Custom Auth Routes

Route::view('/login', 'customeauth.login')->name('login');
Route::view('/test', 'backend.dashboard')->name('test');
Route::post('/login/check', 'AuthController@login')->name('login.check');
Route::view('/register', 'customeauth.register')->name('register');
Route::post('/register/store', 'AuthController@register')->name('register.store');

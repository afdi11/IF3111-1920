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

Route::get('/home', 'HomeController@index')->name('homes');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/laporan', function () {
    return view('buat_laporan');
});

Route::get('/login',    'AuthController@getLogin')->middleware('guest')->name('login.get');
Route::post('/login',   'AuthController@postLogin')->middleware('guest')->name('login');
Route::get('/logout',   'AuthController@logout')->name('auth.logout');

Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/register',   'AuthController@postRegister')->middleware('guest')->name('register');

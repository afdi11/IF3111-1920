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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/laporan', function () {
    return view('buat_laporan');
});

Route::get('/login',    'AuthController@getLogin');
Route::post('/login',   'AuthController@postLogin')->name('login');
Route::get('/register', 'AuthController@getRegister');
Route::post('/register',   'AuthController@postRegister')->name('register');

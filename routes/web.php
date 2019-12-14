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

Route::get('/laporan','LaporanController@form');

Route::post('/laporan/tambah','LaporanController@tambah');
Route::get('/home', 'HomeController@index')->name('homes');

Route::group(['prefix' => 'profile'], function(){
    Route::get('/', 'ProfileController@index')->middleware('auth')->name('profile');
    Route::get('delete/{id?}',   'ProfileController@DeletePost')->middleware('auth')->name('delete.post');
    Route::get('post/{id?}',   'ProfileController@EditViewPost')->middleware('auth')->name('edit.post.view');
    Route::post('edit/{id?}',   'ProfileController@EditPost')->middleware('auth')->name('edit.posting');
});

Route::get('posts/{id?}',   'LaporanController@ViewPost')->name('post.view');

// Route::get('/laporan', function () {
//     return view('buat_laporan');
// });

Route::get('/login',    'AuthController@getLogin')->middleware('guest')->name('login.get');
Route::post('/login',   'AuthController@postLogin')->middleware('guest')->name('login');
Route::get('/logout',   'AuthController@logout')->middleware('auth')->name('auth.logout');

Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/register',   'AuthController@postRegister')->middleware('guest')->name('register');

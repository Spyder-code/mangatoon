<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'UserController@index');
Route::get('/daftar', 'UserController@daftar');

Auth::routes(['register'=> false]);
Auth::routes();

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', 'HomeController@mainAdmin');
});

Route::group(['middleware' => ['member']], function () {
    Route::get('/member', 'HomeController@mainMember');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

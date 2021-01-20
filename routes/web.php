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

Route::group(['middleware' => ['admin','auth'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@mainAdmin')->name('admin.main');
    Route::get('/profile', 'HomeController@profile')->name('admin.profile');
    Route::get('/list-member', 'HomeController@listMember')->name('admin.member');
    Route::resource('buku', 'KomikController');
    Route::resource('genre', 'GenreController');
    Route::get('buku/list/validasi', 'KomikController@validasi')->name('buku.validasi.view');
});

Route::group(['middleware' => ['member','auth']], function () {
    Route::get('/member', 'HomeController@mainMember')->name('member.main');
    Route::get('/karya', 'MemberController@karya')->name('member.karya');
    Route::get('/profile', 'HomeController@profile')->name('member.profile');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

// login google
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

// login facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

// login github
Route::get('login/github', 'Auth\LoginController@redirectToGithub')->name('login.github');
Route::get('login/github/callback', 'Auth\LoginController@handleGithubCallback');


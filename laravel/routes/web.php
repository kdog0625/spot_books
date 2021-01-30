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
//ユーザー認証
Auth::routes();
Route::get('/', 'TweetController@index')->name('tweets.index');
Route::resource('/tweets', 'TweetController')->except(['index','show'])->middleware('auth');
Route::resource('/tweets', 'TweetController')->only(['show']);
Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');
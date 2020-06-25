<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
    Route::delete('/tweets/{tweet}', 'TweetController@destroy')->name('tweet.destroy')->middleware('can:delete,tweet');
    Route::get('/explore', 'ExploreController')->name('explore');
    Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile.show');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->name('profile.edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfileController@update')->name('profile.update')->middleware('can:edit,user');
    Route::post('/profiles/{user:username}/follow', 'FollowController@store')->name('follow');
});
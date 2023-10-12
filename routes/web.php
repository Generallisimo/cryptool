<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);

		// my redirect 
		Route::get('crypprofile', ['as' => 'pages.crypprofile', 'uses'=> 'App\Http\Controllers\PageController@crypprofile']);
		Route::get('crypprofile/crypprofileacc', ['as' => 'pages.crypprofileacc', 'uses'=> 'App\Http\Controllers\PageController@crypprofileacc']);
		Route::get('crypprofile/crypprofileadd', ['as' => 'pages.crypprofileadd', 'uses'=> 'App\Http\Controllers\PageController@crypprofileadd']);
		Route::get('crypprofile/crypprofileadd/crypprofileadacc', ['as' => 'pages.crypprofileadacc', 'uses'=> 'App\Http\Controllers\PageController@crypprofileadacc']);
		Route::get('crypsocialacc', ['as' => 'pages.crypsocialacc', 'uses'=> 'App\Http\Controllers\PageController@crypsocialacc']);
		Route::get('crypadacc', ['as' => 'pages.crypadacc', 'uses'=> 'App\Http\Controllers\PageController@crypadacc']);
		Route::get('crypfanpages', ['as' => 'pages.crypfanpages', 'uses'=> 'App\Http\Controllers\PageController@crypfanpages']);
		Route::get('crypmembers', ['as' => 'pages.crypmembers', 'uses'=> 'App\Http\Controllers\PageController@crypmembers']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

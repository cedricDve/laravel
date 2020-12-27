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
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

//----------------------------------------------------------------------------------------------------------------------------------
Route::resource('posts',App\Http\Controllers\PostController::class);
//----------------------------------------------------------------------------------------------------------------------------------

Route::get('/profile/{username}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Auth::routes();

//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/contact-us', function(){ return view('contact.send_email');})->name('contact-us');
Route::get('/about',  function() { return view('about.index');})->name('about');
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/search-profile','App\Http\Controllers\ProfileController@search')->name('search');
Route::get('/search-profile','App\Http\Controllers\ProfileController@search_user')->name('search_users');
Route::get('/ssearch','App\Http\Controllers\ProfileController@ssearch')->name('ssearch');
//-------------TEST---------------------------------------------------------------------------------------------------------------------

// Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');
Route::get('/welcome', function() { return view('welcome');})->name('welcome');
Route::get('/testA', function() { return view('layouts.home');})->name('home_test');
Route::get('/info', function() { return view('info.index');})->name('info');

Route::post('updateUser', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateUser');
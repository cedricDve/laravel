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
Route::get('/', function () { return view('welcome'); });

//----------------------------------------------------------------------------------------------------------------------------------

Route::resource('posts',App\Http\Controllers\PostController::class);
//----------------------------------------------------------------------------------------------------------------------------------

Route::get('/profile/{username}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/info', [App\Http\Controllers\HomeController::class, 'info'])->name('info');
//----------------------------------------------------------------------------------------------------------------------------------

Route::get('/about',  function() { return view('about.index');})->name('about');
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');
//----------------------------------------------------------------------------------------------------------------------------------

//-------------TEST---------------------------------------------------------------------------------------------------------------------

// Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');

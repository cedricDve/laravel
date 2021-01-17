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
Route::post('/posts/{id}', [App\Http\Controllers\PostController::class, 'update']);
//----------------------------------------------------------------------------------------------------------------------------------
Route::resource('faq', App\Http\Controllers\Admin\FaqController::class);
//Route::get('faqCatTwo', [App\Http\Controllers\Admin\FaqController::class, 'categoryTwo'])->name('faq.categoryTwo');

Route::post('/faq/{id}', [App\Http\Controllers\Admin\FaqController::class, 'update']);
Route::get('/faqs/{id}', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name('faqs.index');
Route::get('/profile/{username}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Auth::routes();

//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/contact-us', function(){ return view('contact.send_email');})->name('contact-us');
Route::get('/about',  function() { return view('about.index');})->name('about');
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
//Route::resource('sendemail',App\Http\Controllers\PostController::class);
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');
Route::post('/sendemail/reply', 'App\Http\Controllers\SendEmailController@reply')->name('replyMail');
Route::post('/sendemail/delete', 'App\Http\Controllers\SendEmailController@deleteMail')->name('deleteMail');
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/search-profile','App\Http\Controllers\ProfileController@search')->name('search');
Route::get('/search-profile','App\Http\Controllers\ProfileController@search_user')->name('search_users');
Route::get('/ssearch','App\Http\Controllers\ProfileController@ssearch')->name('ssearch');
//-------------TEST---------------------------------------------------------------------------------------------------------------------

// Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');
Route::get('/welcome', function() { return view('welcome');})->name('welcome');
Route::get('/testA', function() { return view('layouts.home');})->name('home_test');
Route::get('/info', function() { return view('info.index');})->name('info');
Route::get('/home', function() { return view('admin.home');})->name('admin.home');

Route::post('updateUser', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateUser');



Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace'  => 'User',
    'middleware' =>['auth']
], function() {
    Route::get('/',[App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace'  => 'Admin',
    'middleware' =>['auth','admin']
], function() {
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::get('/mails',[App\Http\Controllers\Admin\HomeController::class, 'showMails'])->name('showMails');
    Route::get('/mails/{id}',[App\Http\Controllers\Admin\HomeController::class, 'showMail'])->name('showmail');
    Route::get('/faq',[App\Http\Controllers\Admin\FaqController::class, 'index'])->name('faq.index');
    
    
});



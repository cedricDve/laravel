<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/courses', [App\Http\Controllers\CoursesController::class, 'index'])->name('courses.index');
Route::post('/coursesBuy', [App\Http\Controllers\CoursesController::class, 'buy'])->name('courses.buy');


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
//-----------Posts-----------------------------------------------------------------------------------------------------------------------
Route::resource('posts',App\Http\Controllers\PostController::class);
Route::post('/posts/{id}', [App\Http\Controllers\PostController::class, 'update']);
//------------FAQ----------------------------------------------------------------------------------------------------------------------
Route::resource('faq', App\Http\Controllers\Admin\FaqController::class);
Route::post('/faq/{id}', [App\Http\Controllers\Admin\FaqController::class, 'update']);
Route::get('/faqs/{id}', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name('faqs.index');
Route::get('/faq/create', [App\Http\Controllers\Admin\FaqController::class, 'create'])->name('faqs.create');
//-------Profile---------------------------------------------------------------------------------------------------------------------------
Route::get('/profile/{username}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
//-------Auth---------------------------------------------------------------------------------------------------------------------------
Auth::routes();
//----------------------------------------------------------------------------------------------------------------------------------
Route::get('/contact-us', function(){ return view('contact.send_email');})->name('contact-us');
Route::get('/about',  function() { return view('about.index');})->name('about');
//-------Email---------------------------------------------------------------------------------------------------------------------------
Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');
Route::post('/sendemail/reply', 'App\Http\Controllers\SendEmailController@reply')->name('replyMail');
Route::post('/sendemail/delete', 'App\Http\Controllers\SendEmailController@deleteMail')->name('deleteMail');
//-------Search---------------------------------------------------------------------------------------------------------------------------
Route::get('/search-profile','App\Http\Controllers\ProfileController@search')->name('search');
Route::get('/search-profile','App\Http\Controllers\ProfileController@search_user')->name('search_users');
Route::get('/ssearch','App\Http\Controllers\ProfileController@ssearch')->name('ssearch');
//-------Search---------------------------------------------------------------------------------------------------------------------------
Route::get('/welcome', [App\Http\Controllers\User\HomeController::class, 'index'])->name('welcome');
Route::get('/info', [App\Http\Controllers\User\HomeController::class, 'info'])->name('info');
//-------Admin---------------------------------------------------------------------------------------------------------------------------
Route::get('/admin/isAdmin/{id}',[App\Http\Controllers\Admin\HomeController::class, 'isAdmin'])->name('admin.isAdmin');
//update user admin configuration
Route::post('/admin/isAdmin',[App\Http\Controllers\Admin\HomeController::class, 'isAdmin']);
//delete user 
Route::post('/admin/destroy/{id}',[App\Http\Controllers\Admin\HomeController::class, 'destroy'])->name('admin.destroy');
//----------------------------------------------------------------------------------------------------------------------------------
//update user information
Route::post('updateUser', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateUser');
//-----------Group-----------------------------------------------------------------------------------------------------------------------
//Users routes: /user 
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace'  => 'User',
    'middleware' =>['auth']
], function() {
    Route::get('/',[App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
});
//Administrator routes: /admin 
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace'  => 'Admin',
    'middleware' =>['auth','admin']
], function() {
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::get('/mails',[App\Http\Controllers\Admin\HomeController::class, 'showMails'])->name('showMails');
    Route::get('/mails/{id}',[App\Http\Controllers\Admin\HomeController::class, 'showMail'])->name('showmail');
    Route::get('/manageUsers',[App\Http\Controllers\Admin\HomeController::class, 'manageUsers'])->name('manageUsers');
    Route::get('/managePosts',[App\Http\Controllers\Admin\HomeController::class, 'managePosts'])->name('managePosts');
    Route::post('/isAdmin/{id}',[App\Http\Controllers\Admin\HomeController::class, 'isAdmin'])->name('admin.isAdmin');  
});

// Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');
//Route::get('/testA', function() { return view('layouts.home');})->name('home_test');

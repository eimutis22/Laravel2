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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/comments','CommentsController@displayComments');
Route::get('/','CommentsController@displayComments');

Route::post('/writecomment','CommentsController@writeComment');

Route::get('/deletecomment/{username}','CommentsController@deleteComment');

Route::get('/contact',function() {
    return view('contact');
})->name('contact');




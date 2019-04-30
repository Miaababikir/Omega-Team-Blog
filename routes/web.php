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

Auth::routes();

Route::get('/', 'PostController@index')->name('home');
Route::get('posts/create', 'PostController@create')->middleware('auth')->name('posts.create');
Route::post('posts', 'PostController@store')->middleware('auth')->name('posts.store');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

// Replies
Route::post('posts/{post}/replies', 'ReplyController@store')->middleware('auth')->name('replies.store');
Route::put('replies/{reply}', 'ReplyController@update')->middleware('auth')->name('replies.update');
Route::delete('replies/{reply}', 'ReplyController@delete')->middleware('auth')->name('replies.delete');


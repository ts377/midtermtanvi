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

Route::get('/' , 'PagesController@home')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');
Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

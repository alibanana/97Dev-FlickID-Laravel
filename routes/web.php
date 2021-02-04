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

Auth::routes();

// Redirects
Route::redirect('/home', '/');

Route::get('/', 'Client\HomeController@index')->name('home.index');

// Routings from front-end merge.
Route::get('/contact-us', function () {
    return view('client/contactUs');
});
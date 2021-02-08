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
    return view('client/index');
});


Route::get('/about-us', function () {
    return view('client/aboutUs');
});



Route::get('/contact-us', function () {
    return view('client/contactUs');
});



Route::get('/portofolio', function () {
    return view('client/portofolio');
});


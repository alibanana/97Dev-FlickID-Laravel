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

// Client Pages Routings
Route::get('/', 'Client\HomeController@index')->name('index');
Route::get('/portfolio', 'Client\PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{id}', 'Client\PortfolioController@show')->name('portfolio.show');
Route::get('/contact-us', 'Client\ClientController@create')->name('client.create');
Route::post('/contact-us', 'Client\ClientController@store')->name('client.store');

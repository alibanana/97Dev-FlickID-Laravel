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

// Client Pages Routings (FIXED)
Route::get('/', 'Client\HomeController@index')->name('index');
Route::get('/portfolio', 'Client\PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{id}', 'Client\PortfolioController@show')->name('portfolio.show');
Route::get('/contact-us', 'Client\ClientController@create')->name('client.create');
Route::post('/contact-us', 'Client\ClientController@store')->name('client.store');
Route::get('/career', 'Client\ApplicantController@create')->name('applicant.create');
Route::post('/career', 'Client\ApplicantController@store')->name('applicant.store');
Route::get('/about-us', 'Client\TeamController@index')->name('team.index');

// Admin Pages Routings (FIXED)
Route::get('/admin', 'Admin\DashboardController@index')->name('admin.index');

// Admin Pages Routings
Route::get('/email', function () {
    return view('emails/email');
});

Route::get('/admin/team', function () {
    return view('admin/teamtable');
});

Route::get('/admin/project', function () {
    return view('admin/project');
});

Route::get('/admin/job', function () {
    return view('admin/jobs');
});

Route::get('/admin/client', function () {
    return view('admin/clients');
});

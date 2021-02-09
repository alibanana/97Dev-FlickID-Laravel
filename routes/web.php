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
Route::redirect('/portofolio', '/portfolio');
Route::redirect('/portfolios', '/portfolio');
Route::redirect('/careers', '/career');
Route::redirect('/admin/clients', '/admin/client');

// Client Pages Routings (FIXED)
Route::get('/', 'Client\PagesController@index')->name('index');
Route::get('/portfolio', 'Client\PagesController@portfolio_index')->name('portfolio.index');
Route::get('/portfolio/{id}', 'Client\PagesController@portfolio_show')->name('portfolio.show');
Route::get('/contact-us', 'Client\ClientController@create')->name('client.create');
Route::post('/contact-us', 'Client\ClientController@store')->name('client.store');
Route::get('/career', 'Client\ApplicantController@create')->name('applicant.create');
Route::post('/career', 'Client\ApplicantController@store')->name('applicant.store');
Route::get('/about-us', 'Client\TeamController@index')->name('team.index');

// Admin Pages Routings (FIXED)
Route::get('/admin', 'Admin\DashboardController@index')->name('admin.index');
Route::get('/admin/project', 'Admin\ProjectController@index')->name('admin.project.index');
Route::get('/admin/client', 'Admin\ClientController@index')->name('admin.client.index');
Route::put('/admin/client/{id}', 'Admin\ClientController@update')->name('admin.client.update');

// Admin Pages Routings
// Route::get('/admin', function () {
// 	return view('admin/dashboard');
// });

Route::get('/email', function () {
    return view('emails/email');
});

Route::get('/admin/team', function () {
    return view('admin/teamtable');
});

// Route::get('/about-us', function () {
//     return view('client/aboutUs');
// });

// Route::get('/contact-us', function () {
//     return view('client/contactUs');
// });

// Route::get('/admin/project', function () {
//     return view('admin/addproject');
// });

Route::get('/admin/job', function () {
    return view('admin/jobs');
});
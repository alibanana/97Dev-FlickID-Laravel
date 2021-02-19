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
Route::get('/admin/project/create', 'Admin\ProjectController@create')->name('admin.project.create');
Route::post('/admin/project', 'Admin\ProjectController@store')->name('admin.project.store');
Route::get('/admin/project/{id}/update', 'Admin\ProjectController@edit')->name('admin.project.edit');
Route::put('/admin/project/{id}', 'Admin\ProjectController@edit')->name('admin.project.update');
Route::delete('/admin/project/{id}', 'Admin\ProjectController@destroy')->name('admin.project.destroy');
Route::get('/admin/client', 'Admin\ClientController@index')->name('admin.client.index');
Route::put('/admin/client/{id}', 'Admin\ClientController@update')->name('admin.client.update');
Route::get('/admin/team', 'Admin\TeamController@index')->name('admin.team.index');
Route::post('/admin/team', 'Admin\TeamController@storeTeamMember')->name('admin.team.store');
Route::put('/admin/team/{id}', 'Admin\TeamController@updateTeamMember')->name('admin.team.update');
Route::delete('/admin/team/{id}', 'Admin\TeamController@destroyTeamMember')->name('admin.team.destroy');
Route::post('/admin/job', 'Admin\TeamController@storeJob')->name('admin.job.store');
Route::put('/admin/job/{id}', 'Admin\TeamController@updateJob')->name('admin.job.update');
Route::put('/admin/job/{id}/change-offerable', 'Admin\TeamController@changeOfferable')->name('admin.job.changeOfferable');
Route::delete('/admin/job/{id}', 'Admin\TeamController@destroyJob')->name('admin.job.destroy');

// Admin Pages Routings
Route::get('/email', function () {
    return view('emails/email');
});

Route::get('/admin/applicant', function () {
    return view('admin/applicant');
});

Route::get('/admin/applicant/questions', function () {
    return view('admin/question');
});

// Frontend testing routings
Route::get('/join-us', function () {
    return view('client/joinUs');
});

Route::get('/admin-login', function () {
    return view('admin/login');
});

// Frontend testing routings
Route::get('admin/featured-project', function () {
    return view('admin/featured_project');
});

Route::get('/admin/forget-password', function () {
    return view('admin/forget-password');
});

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


/*
|--------------------------------------------------------------------------
| Default Authentication Routes Used (not all functions are used).
|
| All the default auth routes can be found here: vendor\laravel\ui\src\AuthRouteMethods.php
|
| Configuration File: config\auth.php
|--------------------------------------------------------------------------
| [1] SHOW LOGIN FORM
|   Description: Shows the login page.
|   Name: login 
|   Method: GET /login
|   Action: App\Http\Controllers\Auth\LoginController@showLoginForm
| [2] LOGIN
|   Description: Logged the user (admin) in.
|   Name: -
|   Method: POST /login
|   Action: App\Http\Controllers\Auth\LoginController@login
|   Req-Body: email, password
| [3] LOGOUT
|   Description: Logged the user (admin) out.
|   Name: logout
|   Method: POST /logout
|   Action: App\Http\Controllers\Auth\LoginController@logout
|   Req-Body: -
| [4] SEND RESET LINK TO EMAIL
|   Description: Sends an password reset link to the given email.
|   Name: password.email
|   Method: POST /password/email
|   Action: App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail
|   Req-Body: email
| [5] SHOW PASSWORD RESET FORM
|   Description: Shows the password reset form. Link will be given through email notifications.
|   Name: password.reset
|   Method: GET /password/reset/{token}
|   Action: App\Http\Controllers\Auth\ResetPasswordController@showResetForm
|   Req-Param: email (optional)
| [5] RESET PASSWORD
|   Description: Resets the user's (from the given email) password.
|   Name: password.update
|   Method: POST /password/reset/{token}
|   Action: App\Http\Controllers\Auth\ResetPasswordController@reset
|   Req-Body: token, email, password, password_confirmation
*/
Auth::routes();


// Redirects
Route::redirect('/admin-login', '/login');
Route::redirect('/home', '/');
Route::redirect('/portofolio', '/portfolio');
Route::redirect('/portfolios', '/portfolio');
Route::redirect('/careers', '/career');
Route::redirect('/admin/clients', '/admin/client');
Route::redirect('/admin/services', '/admin/service');

// Client Pages Routings (FIXED)
Route::get('/', 'Client\PagesController@index')->name('index');
Route::get('/portfolio', 'Client\PagesController@portfolio_index')->name('portfolio.index');
Route::get('/portfolio/{id}', 'Client\PagesController@portfolio_show')->name('portfolio.show');
Route::get('/contact-us', 'Client\ClientController@create')->name('client.create');
Route::post('/contact-us', 'Client\ClientController@store')->name('client.store');
Route::get('/join-us', 'Client\ApplicantController@create')->name('applicant.create');
Route::post('/join-us', 'Client\ApplicantController@store')->name('applicant.store');
Route::get('/about-us', 'Client\TeamController@index')->name('team.index');

// Admin Pages Routings (FIXED)
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::put('password/update', 'Admin\UserController@passwordUpdate')->name('user.passwordUpdate');
    Route::get('/', 'Admin\DashboardController@index')->name('index');
    Route::get('service', 'Admin\ServiceController@index')->name('service.index');
    Route::post('service', 'Admin\ServiceController@store')->name('service.store');
    Route::put('service/{id}', 'Admin\ServiceController@update')->name('service.update');
    Route::delete('service/{id}', 'Admin\ServiceController@destroy')->name('service.destroy');
    Route::get('project', 'Admin\ProjectController@index')->name('project.index');
    Route::get('project/create', 'Admin\ProjectController@create')->name('project.create');
    Route::post('project', 'Admin\ProjectController@store')->name('project.store');
    Route::get('project/{id}/edit', 'Admin\ProjectController@edit')->name('project.edit');
    Route::put('project/{id}', 'Admin\ProjectController@update')->name('project.update');
    Route::delete('project/{id}', 'Admin\ProjectController@destroy')->name('project.destroy');
    Route::delete('project-detail/{id}', 'Admin\ProjectController@destroyProjectDetail')->name('projectDetail.destroy');
    Route::get('featured-project', 'Admin\FeaturedProjectController@index')->name('featuredProject.index');
    Route::post('featured-project', 'Admin\FeaturedProjectController@store')->name('featuredProject.store');
    Route::put('featured-project/{id}', 'Admin\FeaturedProjectController@update')->name('featuredProject.update');
    Route::delete('featured-project/{id}', 'Admin\FeaturedProjectController@destroy')->name('featuredProject.destroy');
    Route::get('client', 'Admin\ClientController@index')->name('client.index');
    Route::put('client/{id}', 'Admin\ClientController@update')->name('client.update');
    Route::get('team', 'Admin\TeamController@index')->name('team.index');
    Route::post('team', 'Admin\TeamController@storeTeamMember')->name('team.store');
    Route::put('team/{id}', 'Admin\TeamController@updateTeamMember')->name('team.update');
    Route::delete('team/{id}', 'Admin\TeamController@destroyTeamMember')->name('team.destroy');
    Route::post('job', 'Admin\TeamController@storeJob')->name('job.store');
    Route::put('job/{id}', 'Admin\TeamController@updateJob')->name('job.update');
    Route::put('job/{id}/change-offerable', 'Admin\TeamController@changeOfferable')->name('job.changeOfferable');
    Route::delete('job/{id}', 'Admin\TeamController@destroyJob')->name('job.destroy');
    Route::get('question', 'Admin\QuestionController@index')->name('question.index');
    Route::post('question-mcq', 'Admin\QuestionController@storeMCQ')->name('question.storeMCQ');
    Route::post('question-slider', 'Admin\QuestionController@storeSlider')->name('question.storeSlider');
    Route::post('question-open-ended', 'Admin\QuestionController@storeOpenEnded')->name('question.storeOpenEnded');
    Route::delete('question/{id}', 'Admin\QuestionController@destroy')->name('question.destroy');
    Route::get('applicant', 'Admin\ApplicantController@index')->name('applicant.index');
    Route::put('applicant/{id}', 'Admin\ApplicantController@update')->name('applicant.update');
});

// 
// Route::get('/email', function () {
//     return view('emails/email');
// });

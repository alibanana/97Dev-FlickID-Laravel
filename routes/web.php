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

    return view('admin/dashboard');

    

});

Route::get('/team', function () {
    return view('admin/teamtable');
});

Route::get('/project', function () {
    return view('admin/project');
});

Route::get('/job', function () {
    return view('admin/jobs');
});

Route::get('/client', function () {
    return view('admin/clients');
});
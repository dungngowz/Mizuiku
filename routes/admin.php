<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

//->middleware(['auth'])
Route::name('admin.')->group(function () {
    Route::resource('/dashboard', 'DashBoardController');
    Route::resource('/contact-us', 'ContactUsController');
    Route::get('contact-us/data', 'ContactController@data');
});
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
Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::resource('/dashboard', 'DashBoardController');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::get('/contact-us/data', 'ContactUsController@data');
    Route::resource('/contact-us', 'ContactUsController');
    Route::get('/introduction', 'IntroductionController@index')->name('intro.index');
    Route::get('/introduction/program', 'IntroductionController@program')->name('intro.program');
    Route::get('/introduction/partner', 'IntroductionController@partner')->name('intro.partner');

});
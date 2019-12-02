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
    // dashboard
    Route::resource('/dashboard', 'DashBoardController');

    // auth
    Route::get('/logout', 'Auth\LoginController@logout');

    // news
    Route::resource('/articles', 'ArticleController');
    
    Route::get('/categories/data', 'CategoryController@data');
    Route::resource('/categories', 'CategoryController');

    // contact
    Route::get('/contact-us/data', 'ContactUsController@data');
    Route::resource('/contact-us', 'ContactUsController');
});
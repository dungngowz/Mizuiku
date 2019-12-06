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
    Route::get('/dashboard', 'DashBoardController@index')->name('admin.dashboard');

    // auth
    Route::get('/logout', 'Auth\LoginController@logout');

    // About Us
    Route::get('/about-us/data', 'AboutUsController@data');
    Route::resource('/about-us', 'AboutUsController');
    
    // Categories
    Route::get('/categories/data', 'CategoryController@data');
    Route::resource('/categories', 'CategoryController');

    // Categories
    Route::get('/news/data', 'NewsController@data');
    Route::resource('/news', 'NewsController');

    // Programs-timeline
    Route::get('/program-timeline/data', 'ProgramTimelineController@data');
    Route::resource('/program-timeline', 'ProgramTimelineController');

    // Contact
    Route::get('/contact-us/data', 'ContactUsController@data');
    Route::resource('/contact-us', 'ContactUsController');

    // upload file
    //Route::post('upload-file', 'FileController@uploadTmp');
    Route::post('upload-image-base64', 'ImageController@uploadImageBase64')->name('admin.uploadImageBase64');
});
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

    // introduction
    Route::get('/introduction', 'IntroductionController@index')->name('intro.index');
    Route::get('/introduction/program', 'IntroductionController@program')->name('intro.program');
    Route::get('/introduction/partner', 'IntroductionController@partner')->name('intro.partner');

    // news
    Route::get('/news', 'NewsController@index')->name('news.index');
    Route::get('/news/program', 'NewsController@program')->name('news.program');
    Route::get('/news/environment', 'NewsController@environment')->name('news.environment');

    // library
    Route::get('/library', 'LibraryController@index')->name('library.index');
    Route::get('/library/image', 'LibraryController@image')->name('library.image');
    Route::get('/library/video', 'LibraryController@video')->name('library.video');

    // schedule
    Route::get('/schedule', 'ScheduleController@index')->name('schedule.index');

    // e-learning
    Route::get('/e-learning', 'ELearningController@index')->name('eLearning.index');

    // contact
    Route::get('/contact-us/data', 'ContactUsController@data');
    Route::resource('/contact-us', 'ContactUsController');
});
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
    Route::get('/dashboard', function(){
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    // auth
    Route::get('/logout', 'Auth\LoginController@logout');

    // Banners
    Route::get('/banners/data', 'BannerController@data');
    Route::resource('/banners', 'BannerController');
    Route::post('/banners/delete-multiple', 'BannerController@deleteMultiple');

    // About Us
    Route::get('/post/data', 'PostController@data');
    Route::resource('/post', 'PostController');
    
    // Categories
    Route::get('/categories/data', 'CategoryController@data');
    Route::resource('/categories', 'CategoryController');

    // News
    Route::get('/news/data', 'NewsController@data');
    Route::resource('/news', 'NewsController');

    // Video Library
    Route::get('/library/data', 'LibraryController@data');
    Route::resource('/library', 'LibraryController');

    // Video Course
    Route::get('/course-video/data', 'CourseVideoController@data');
    Route::resource('/course-video', 'CourseVideoController');

    // Programs-timeline
    Route::get('/program-timeline/data', 'ProgramTimelineController@data');
    Route::resource('/program-timeline', 'ProgramTimelineController');

    // Contact
    Route::get('/contact-us/data', 'ContactUsController@data');
    Route::resource('/contact-us', 'ContactUsController');

    // Library
    Route::get('/library', 'LibraryController@index')->name('admin.library');
    Route::get('/library/create', 'LibraryController@create')->name('admin.library.create');
    Route::post('/library/store', 'LibraryController@store')->name('admin.library.store');
    Route::get('/library/{id}/edit', 'LibraryController@edit')->name('admin.library.edit');
    Route::put('/library/{id}/update', 'LibraryController@update')->name('admin.library.update');
    Route::delete('/library/delete/{id}', 'LibraryController@destroy')->name('admin.library.delete');
    Route::get('/library/data', 'LibraryController@data')->name('admin.library.data');
    Route::post('library/storeFileUpload', 'LibraryController@storeFileUpload')->name('admin.library.storeFileUpload');
    // upload file
    //Route::post('upload-file', 'FileController@uploadTmp');
    Route::post('upload-image-base64', 'ImageController@uploadImageBase64')->name('admin.uploadImageBase64');
});
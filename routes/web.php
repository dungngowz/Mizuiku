<?php

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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

// Location
Route::group(['namespace' => 'Client'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/contact-us', 'HomeController@contact')->name('contact');
    Route::get('/introduction', 'HomeController@introduction')->name('introduction');
    Route::get('/detail-introduction', 'HomeController@detailIntroduction')->name('detail-introduction');

});


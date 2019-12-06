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

Route::get('set-locale/{keyLocale}/{locale}', function ($keyLocale, $locale){
    $time = time() + (86400 * 30);
    setcookie($keyLocale, $locale, $time, "/");
    return redirect()->back();
});

// Location
Route::group(['namespace' => 'Client'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/contact-us', 'HomeController@contact')->name('contact');
    Route::get('/introduction', 'HomeController@introduction')->name('introduction');
    Route::get('/detail-introduction', 'HomeController@detailIntroduction')->name('detail-introduction');
    Route::get('/live-learn-introduction', 'HomeController@liveLearnIntroduction')->name('live-learn-introduction');
    Route::get('/e-learning', 'HomeController@eLearning')->name('e-learning');
    Route::get('/program-timeline', 'HomeController@programTimeline')->name('program-timeline');
    Route::get('/news', 'HomeController@news')->name('news');
    Route::get('/library', 'HomeController@library')->name('library');

});


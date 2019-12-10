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
    Route::get('/lien-he', 'HomeController@contact')->name('contact');
    Route::get('/gioi-thieu', 'HomeController@introduction')->name('introduction');
    Route::get('/gioi-thieu/{slug}', 'HomeController@detailIntroduction')->name('detail-introduction');
    Route::get('/live-learn-introduction', 'HomeController@liveLearnIntroduction')->name('live-learn-introduction');
    Route::get('/khoa-hoc', 'HomeController@eLearning')->name('e-learning');
    
    Route::get('/tin-tuc/{slugCategory}/{slugArticle}', 'NewsController@show');
    Route::get('/tin-tuc/{slugCategory}', 'NewsController@index');

    Route::get('/thu-vien/{keyword}/{slugArticle}', 'LibraryController@show');
    Route::get('/thu-vien/{keyword}', 'LibraryController@index');

    Route::resource('/lich-trinh', 'ProgramTimelineController');

    Route::get('/thu-vien', 'HomeController@library')->name('library');

    Route::post('/ajax-register', 'HomeController@ajaxRegister')->name('ajaxRegister');
    Route::post('/ajax-login', 'HomeController@ajaxLogin')->name('ajaxLogin')->middleware(['auth','verified']);

    Route::get('/get-provinces', 'HomeController@getProvinces')->name('getProvinces');

});

Auth::routes(['verify' => true]);




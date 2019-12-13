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
    // \Cookie::queue($keyLocale, $locale, $time);
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
    Route::post('/ajax-login', 'HomeController@ajaxLogin')->name('ajaxLogin');

    Route::get('/get-provinces', 'HomeController@getProvinces')->name('getProvinces');

    Route::get('/dieu-khoan/{keyword}', 'HomeController@showTermOrPolicy')->name('showTerm');
    Route::get('/chinh-sach/{keyword}', 'HomeController@showTermOrPolicy')->name('showPolicy');

    Route::group(['middleware' => 'client'], function(){
        Route::get('/quan-ly-tai-khoan', 'HomeController@showManageAccount')->name('showManageAccount');
        Route::get('/doi-mat-khau', 'HomeController@showChangePassword')->name('showChangePassword');
        Route::get('/quan-ly-khoa-hoc', 'HomeController@showMyCourse')->name('showMyCourse');
        Route::post('/logout-client', 'HomeController@logoutClient')->name('logoutClient');
        Route::put('/update-info', 'HomeController@updateInfo')->name('updateInfo');
    });
});

Auth::routes(['verify' => true]);




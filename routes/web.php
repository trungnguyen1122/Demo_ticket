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



Auth::routes();

Route::get('/', 'FrontEnd\HomeController@index')->name('home');
Route::get('auth/{provider}','Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\LoginController@handleProviderCallback');
Route::get('/event/detail','FrontEnd\HomeController@getDetail');
Route::get('/checkout/{event_id}','FrontEnd\HomeController@getCheckout');
Route::get('/end_checkout','FrontEnd\HomeController@endCheckout');
Route::group(['prefix' => 'admin', 'middleware'=>['admin']],function () {
    Route::get('home','Admin\HomeController@getHome');
    Route::get('eventlist','Admin\HomeController@getEvent')->name('admin.list');
    Route::get('events', 'Admin\HomeController@getEvents');
    Route::get('hot-event', 'Admin\HomeController@getHotevent')->name('admin.hotevent');
    Route::get('confirmevent', 'Admin\HomeController@getConfirmevent')->name('admin.confirmevent');
    Route::get('confirm', 'Admin\HomeController@confirm')->name('confirm');

    Route::get('delete/{event_id}','Admin\HomeController@getDeleteevent');
    Route::get('setting_banner','Admin\HomeController@settingBanner')->name('admin.setting_banner');
    Route::get('delete/banner/{banner_id}','Admin\HomeController@delete_banner');

    Route::get('setting_category','Admin\HomeController@settingCategory')->name('admin.setting_category');
    Route::get('setting_footer','Admin\HomeController@settingFooter')->name('admin.setting_footer');
    Route::get('user_list','Admin\HomeController@getUser')->name('admin.user_list');

});

Route::get('events', 'FrontEnd\HomeController@filterEvents')->name('filterEvents');
Route::get('event', 'FrontEnd\HomeController@searchByCity');
Route::get('event/{url}', 'FrontEnd\HomeController@getDetail');
Route::get('detail', function () {
    return view('FrontEnd.detail-event');
});
Route::get('autocomplete', 'FrontEnd\SearchController@autocomplete')->name('autocomplete');
Route::get('create', 'FrontEnd\HomeController@createEvent')->name('create')->middleware('auth');
Route::post('submit', 'FrontEnd\HomeController@submit')->name('submit');
Route::get('ajaxgt', 'FrontEnd\HomeController@gt')->name('gt');
Route::get('ajaxttv', 'FrontEnd\HomeController@ttv')->name('ttv');
Route::get('ajaxntc', 'FrontEnd\HomeController@ntc')->name('ntc');
Route::get('ajaxtl', 'FrontEnd\HomeController@tl')->name('tl');




Route::get('/province/{id}', 'FrontEnd\HomeController@getDistrict');
Route::prefix('my-info')->group(function (){
    Route::get('profile', 'FrontEnd\UserController@profile')->name('myProfile');
    Route::post('update-profile','FrontEnd\UserController@getProfile')->name('updateProfile');
    Route::get('my-ticket', 'FrontEnd\UserController@myTicket')->name('myTicket');
    Route::get('my-event', 'FrontEnd\UserController@myEvent')->name('myEvent');
    Route::get('revenue', 'FrontEnd\UserController@revenue')->name('revenue');
    Route::get('my-bank', 'FrontEnd\UserController@myBank')->name('myBank');
    Route::post('update-bank','FrontEnd\UserController@getBank')->name('updateBank');
});
Route::get('/changePassword','FrontEnd\UserController@showChangePasswordForm')->name('auth.changepassword');
Route::post('/changePassword','FrontEnd\UserController@changePassword')->name('changePassword');



Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
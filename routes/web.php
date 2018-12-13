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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/jadwal', function () {
    return view('jadwal');
})->name('jadwal');

Route::get('features', 'featuresController@index')->name('features');
Route::get('news', 'newsController@index')->name('news');

Route::group(['middleware' => ['web', 'auth']], function(){
   Route::get('/', 'HomeController@index')->name('home');
   Route::get('main', 'mainController@index')->name('main');
   Route::get('profile/{id}/edit', 'profileController@index')->name('profile');
   Route::post('avatar', 'profileController@update_avatar')->name('profile.update_avatar');
   Route::post('del', 'profileController@del_avatar')->name('del.avatar');
   Route::post('profile/{id}', 'profileController@update')->name('profile.update');
});
Auth::routes();

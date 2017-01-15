<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@getIndex')->name('index');
Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/download', 'PagesController@getDownload')->name('download');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('menus', 'MenuController');
Route::resource('submenus', 'SubmenuController');
Route::resource('schemes', 'SchemeController');
Route::resource('news', 'NewsController');
Route::resource('notices', 'NoticeController');
Route::resource('sliders', 'SliderController');
Route::resource('sayings', 'SayingController');
Route::resource('contacts', 'ContactController');
Route::resource('overalls', 'OverallController');
Route::resource('quicklinks', 'QuicklinkController');
Route::resource('downloads', 'DownloadController');
Route::resource('abouts', 'AboutController');
Route::resource('teammembers', 'TeammemberController');
Route::resource('boardmembers', 'BoardmemberController');
Route::resource('themes', 'ThemeController');
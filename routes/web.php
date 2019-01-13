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


Route::get('/', 'SiteController@index');

Route::get('/galery', 'GalleryController@index');

Route::get('/news', 'NewsController@index');

Route::get('/board', 'BoardController@index');

Route::get('/addgallery', function () {
    return view('addgallery');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/nopage', function () {
    return view('nopage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// 						КОНТРОЛЛЕРЫ@функция в контроллере

Route::post('/addgallery', [
	'uses' => 'GalleryController@insert'
])->name('gallery.create');


Route::post('/addnews', [
	'uses' => 'NewsController@insert'
])->name('news.create');

Route::post('/addboard', [
	'uses' => 'BoardController@insert'
])->name('board.create');

Route::post('/image/upload', 'ImageController@upload')->name('image.upload');

Route::get('/ournew/{new}', 'NewsController@new');
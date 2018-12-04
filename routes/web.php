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

Route::get('/galery', function () {
    return view('galery');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

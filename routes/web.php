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

// 下記にリダイレクトの処理追加
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('news/create','Admin\NewsController@add');
    //PHP13追記
    Route::post('news/create','Admin\NewsController@create');
    Route::get('news','Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');//PHP追記
    Route::post('news/edit', 'Admin\NewsController@update');//PHP追記
    Route::get('news/delete', 'Admin\NewsController@delete');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit' , 'Admin\ProfileController@update');
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
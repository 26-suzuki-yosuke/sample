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

/*
Route::get('admin/news/create', function () {
    return view('admin/news/create');
});
*/

Route::prefix('admin/profile')->group(function() {
   Route::get('create', 'Admin\ProfileController@add')->middleware('auth'); 
   Route::get('edit', 'Admin\ProfileController@edit') ->middleware('auth');
});

Route::get('admin/news/create', 'Admin\NewsController@add')->middleware('auth');

/*
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});
*/

/*
Route::get('/', function () {
    return view('admin/news/create');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

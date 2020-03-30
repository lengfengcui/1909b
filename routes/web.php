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


Route::get('login', 'LoginController@login');
Route::post('logindo', 'LoginController@logindo');

Route::prefix('client')->group(function(){
Route::get('create', 'ClientController@create');
Route::post('store', 'ClientController@store');
Route::get('index', 'ClientController@index');
Route::get('destroy', 'ClientController@destroy');
Route::get('edit/{id}', 'ClientController@edit');
Route::post('update/{id}', 'ClientController@update');
Route::get('ajaxjdjg', 'ClientController@ajaxjdjg');
});


Route::prefix('account')->group(function(){
    Route::get('create','AccountController@create');
    Route::post('store','AccountController@store');
    Route::get('index','AccountController@index');
    Route::get('edit/{id}','AccountController@edit');
    Route::post('update/{id}','AccountController@update');
    Route::get('destroy/{id}','AccountController@destroy');
});


Route::prefix('visit')->group(function(){
	Route::get('create','VisitController@create');
	Route::post('store','VisitController@store');
	Route::get('index','VisitController@index');
	Route::get('edit/{id}','VisitController@edit');
	Route::post('update/{id}','VisitController@update');
	Route::get('destroy/{id}','VisitController@destroy');

});



// 后台管理员
Route::prefix('admin')->group(function(){
	Route::get('index', 'AdminController@index');
	Route::get('create', 'AdminController@create');
	Route::post('store', 'AdminController@store');
	Route::get('destroy/{id}', 'AdminController@destroy');
	Route::get('update/{id}', 'AdminController@update');
});

Route::get('admins','AdminsController@admins');


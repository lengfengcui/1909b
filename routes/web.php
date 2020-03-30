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

Route::prefix('visit')->group(function(){
	Route::get('create','VisitController@create');
	Route::post('store','VisitController@store');
	Route::get('index','VisitController@index');
	Route::get('edit/{id}','VisitController@edit');
	Route::post('update/{id}','VisitController@update');
	Route::get('destroy/{id}','VisitController@destroy');

});
Route::get('admins','AdminsController@admins');
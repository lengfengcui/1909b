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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('client')->group(function(){
Route::get('create', 'ClientController@create');
Route::post('store', 'ClientController@store');
Route::get('index', 'ClientController@index');
Route::get('destroy', 'ClientController@destroy');
Route::get('edit/{id}', 'ClientController@edit');
Route::post('update/{id}', 'ClientController@update');
Route::get('ajaxjdjg', 'ClientController@ajaxjdjg');
});
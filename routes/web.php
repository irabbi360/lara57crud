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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('shop','ShopController@index');

Route::get('create','ShopController@create');
Route::post('store','ShopController@store');
Route::get('show/{id}','ShopController@show');
Route::get('edit/{id}','ShopController@edit');
Route::post('update/{id}','ShopController@update');
Route::delete('delete/{id}','ShopController@delete');











Route::get('image','ShopController@imageGet');
Route::post('image-upload','ShopController@imageUpload');

































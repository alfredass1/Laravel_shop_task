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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-category','CategoryController@AddCateg');
Route::get('/control-category','CategoryController@ControlCateg');
Route::POST('/store-category','CategoryController@StoreCateg'); //s-c yra uzklausa ne psl
Route::get('/delete_category/{category}','CategoryController@deleteCateg'); //t-k yra uzklausa ne psl
Route::get('/add-product','HomeController@AddProduct');
Route::get('/logout','HomeController@atsijungti');

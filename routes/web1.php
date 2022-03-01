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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/product', 'SiteController@product')->name('product');

//vendor\laravel\framework\src\Illuminate\Routing\Router.php
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'HomeController@admin')->name('admin');
//Route::get('/dashboard', 'HomeController@admin')->name('admin');
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/brand/add-brand', 'BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand', 'BrandController@saveBrand')->name('save-brand');//form route
Route::post('/brand/update-brand', 'BrandController@updateBrand')->name('update-brand');//form route


Route::get('/brand/manage-brand', 'BrandController@manageBrand')->name('manage-brand');
//Route::get('/brand/inactive/{test}', 'BrandController@inactive')->name('inactive-brand');
Route::get('/brand/inactive/{id}', 'BrandController@inactive')->name('inactive-brand');
Route::get('/brand/active/{id}', 'BrandController@active')->name('active-brand');
Route::get('/brand/delete/{id}', 'BrandController@delete')->name('delete-brand');
Route::get('/brand/edit/{id}', 'BrandController@edit')->name('edit-brand');

//Ajax
Route::get('/brand/brandStatus/{id}/{s}', 'BrandController@brandStatus')->name('brandStatus');

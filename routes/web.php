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
//no entry without login and prevent hacker
Route::middleware(['auth'])->group(function(){

//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'HomeController@admin')->name('admin');
//Route::get('/dashboard', 'HomeController@admin')->name('admin');
Route::get('/dashboard', 'HomeController@index')->name('home');

//Brand Controller
Route::get('/brand/add-brand', 'BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand', 'BrandController@saveBrand')->name('save-brand');//form route
Route::post('/brand/update-brand', 'BrandController@updateBrand')->name('update-brand');//form route


Route::get('/brand/manage-brand', 'BrandController@manageBrand')->name('manage-brand');
//Route::get('/brand/inactive/{test}', 'BrandController@inactive')->name('inactive-brand');
//Route::get('/brand/inactive/{id}', 'BrandController@inactive')->name('inactive-brand');
//Route::get('/brand/active/{id}', 'BrandController@active')->name('active-brand');
Route::get('/brand/delete/{id}', 'BrandController@delete')->name('delete-brand');
Route::get('/brand/edit/{id}', 'BrandController@edit')->name('edit-brand');

//Ajax
Route::get('/brand/brandStatus/{id}/{s}', 'BrandController@brandStatus')->name('brandStatus');


//Category Controller
Route::get('/category/manage-category', 'CategoryController@manageCategory')->name('manage-category');
Route::get('/category/add-category', 'CategoryController@addCategory')->name('add-category');
Route::post('/category/save-category', 'CategoryController@saveCategory')->name('save-category');//form route
Route::get('/category/categoryStatus/{id}/{s}', 'CategoryController@categoryStatus')->name('categoryStatus');
Route::get('/category/delete/{id}', 'CategoryController@delete')->name('delete-category');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('edit-category');


//Sub category Controller
Route::get('/category/manage-sub-category', 'SubcategoryController@manageSubCategory')->name('manage-subcategory');
Route::get('/category/add-sub-category', 'SubcategoryController@addSubCategory')->name('add-sub-category');
Route::post('/category/save-sub-category', 'SubcategoryController@saveSubCategory')->name('save-sub-category');//form route


//Sub Sub Category Controller
Route::get('/category/manage-sub-sub-category', 'SubsubcategoryController@manageSubsubCategory')->name('manage-subsubcategory');

});

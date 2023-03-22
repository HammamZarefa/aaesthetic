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

Route::get('/','HomePageController@index');
Route::get('/about-us','AboutController@about');
Route::get('/team','TeamController@team');
Route::get('/products','ProductController@product');
Route::get('/product/{id}','ProductDetailsController@productDetails');
Route::get('/contact','ContactController@contact');

// Admin Slider
Route::get('/admin/slider','AdminController@admin');
Route::delete('/admin/slides/delete/{id}','AdminController@slideDelete');
Route::post('/admin/slides/add', 'AdminController@store');

// Admin About Us
Route::get('/admin/about-us','AboutController@show');
Route::post('/admin/about-us/edit','AboutController@update');

// Admin Products
Route::get('/admin/products','ProductController@show');
Route::delete('/admin/products/delete/{id}','ProductController@destroy');
Route::get('/admin/products/edit/{id}','ProductController@edit');

// Admin Product images
Route::post('admin/product/{id}/imgs/add','ProductController@addImage');
Route::delete('admin/products/img/delete/{id}','ProductController@deleteImage');

// Admin Product Info Edit
Route::post('admin/productInfo/edit/{id}','ProductController@editProduct');

// Admin Add New Product
Route::get('admin/product/add','ProductController@create');
Route::post('admin/product/new','ProductController@store');

//Admin Team
Route::get('admin/team','TeamController@admin');
Route::get('admin/team/edit/{id}','TeamController@edit');
Route::post('admin/team/editSave/{id}','TeamController@update');
Route::delete('admin/team/delete/{id}','TeamController@destroy');
Route::get('admin/team/add','TeamController@add');
Route::post('admin/team/addSave','TeamController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

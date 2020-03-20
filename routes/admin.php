<?php
use Illuminate\Support\Facades\Route;
//use Illuminate\Routing\Route;

Route::get('/home', "AdminController@dashbroad");

Route::get('tables/category', "AdminController@category");
Route::get('tables/category/create', "AdminController@addCategory");
Route::post('tables/category/store', "AdminController@categoryStore");
Route::get('tables/category/edit/{id}', "AdminController@categoryEdit");
Route::post('tables/category/update/{id}', "AdminController@categoryUpdate");
Route::get('tables/category/delete/{id}', "AdminController@categoryDestroy");

Route::get('tables/brand', "AdminController@brand");
Route::get('tables/brand/create', "AdminController@addBrand");
Route::post('tables/brand/store', "AdminController@brandStore");
Route::get('tables/brand/edit/{id}', "AdminController@brandEdit");
Route::post('tables/brand/update/{id}', "AdminController@brandUpdate");
Route::get('tables/brand/delete/{id}', "AdminController@brandDestroy");

Route::get('tables/product', "AdminController@product");
Route::get('tables/product/create', "AdminController@addProduct");
Route::post('tables/product/store', "AdminController@productStore");
Route::get('tables/product/edit/{id}', "AdminController@productEdit");
Route::post('tables/product/update/{id}', "AdminController@productUpdate");
Route::get('tables/product/delete/{id}', "AdminController@productDestroy");

Route::get('tables/user', "AdminController@user");
Route::get('tables/user/update/{id}', "AdminController@userUpdate");
Route::get('tables/user/delete/{id}', "AdminController@userDestroy");

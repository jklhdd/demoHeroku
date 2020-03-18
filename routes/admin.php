<?php
use Illuminate\Support\Facades\Route;
//use Illuminate\Routing\Route;

Route::get('category', "AdminController@category");
Route::get('category/create', "AdminController@addCategory");
Route::post('category/store', "AdminController@categoryStore");
Route::get('category/edit/{id}', "AdminController@categoryEdit");
Route::post('category/update/{id}', "AdminController@categoryUpdate");
Route::get('category/delete/{id}', "AdminController@categoryDestroy");

Route::get('brand', "AdminController@brand");
Route::get('brand/create', "AdminController@addBrand");
Route::post('brand/store', "AdminController@brandStore");
Route::get('brand/edit/{id}', "AdminController@brandEdit");
Route::post('brand/update/{id}', "AdminController@brandUpdate");
Route::get('brand/delete/{id}', "AdminController@brandDestroy");

Route::get('product', "AdminController@product");
Route::get('product/create', "AdminController@addProduct");
Route::post('product/store', "AdminController@productStore");
Route::get('product/edit/{id}', "AdminController@productEdit");
Route::post('product/update/{id}', "AdminController@productUpdate");
Route::get('product/delete/{id}', "AdminController@productDestroy");

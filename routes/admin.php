<?php

Route::get('category', "AdminController@category");
Route::get('category/create', "AdminController@addCategory");
Route::post('category/store', "AdminController@categoryStore");

Route::get('brand', "AdminController@brand");
Route::get('brand/create', "AdminController@addBrand");
Route::post('brand/store', "AdminController@brandStore");

Route::get('product', "AdminController@product");
Route::get('product/create', "AdminController@addProduct");
Route::post('product/store', "AdminController@productStore");

<?php
session_start();
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
    return view('home');
});
//Route::METHOD(path_string,HANDLE_FUNCTION);
// Method: post get put delete ... CRUD

Route::get("/add-student","WebController@addStudent");
// Method: GET chạy url trên trình duyệt
Route::get("/danh-sach-lop-hoc","WebController@getClassRoom");
//Route::METHOD(path_string,Controller@HANDLE_FUNCTION_IN_CONTROLLER);
Route::post("/danh-sach-lop-hoc","WebController@postClassRoom");
Route::get('/shop', function () {
    return view('shop');
});

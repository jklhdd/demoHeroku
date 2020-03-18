<?php
use Illuminate\Support\Facades\Route;
Route::prefix("admin")
    ->middleware('check_admin')
    ->group(function () {
        include_once "admin.php";
    });

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

Route::get('/', "WebController@homePage");
//Route::METHOD(path_string,HANDLE_FUNCTION);
// Method: post get put delete ... CRUD

Route::get("/add-student", "WebController@addStudent");
// Method: GET chạy url trên trình duyệt
Route::get("/danh-sach-lop-hoc", "WebController@getClassRoom");
//Route::METHOD(path_string,Controller@HANDLE_FUNCTION_IN_CONTROLLER);
Route::post("/danh-sach-lop-hoc", "WebController@postClassRoom");
Route::get('/shop', "WebController@shopList");
Route::get('/shop/{b_id}/{c_id}', "WebController@shopPage");

Route::get('/product-single-{id}', "WebController@singlePage");

Auth::routes();

Route::get('/home', 'WebController@homePage');

Route::get('/logout', function () {
    Illuminate\Support\Facades\Auth::logout();
    return redirect()->to('login');
});

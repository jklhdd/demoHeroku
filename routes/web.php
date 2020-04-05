<?php
use Illuminate\Support\Facades\Route;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
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

// Route::get("/add-student", "WebController@addStudent");
// // Method: GET chạy url trên trình duyệt
// Route::get("/danh-sach-lop-hoc", "WebController@getClassRoom");
// //Route::METHOD(path_string,Controller@HANDLE_FUNCTION_IN_CONTROLLER);
// Route::post("/danh-sach-lop-hoc", "WebController@postClassRoom");

Route::get('/shop', "WebController@shopList");
Route::get('/shop/{b_id}/{c_id}', "WebController@shopPage");

Route::get('/product-single-{id}', "WebController@singlePage");

Route::get('/cart', "WebController@cart")->middleware('auth');

Route::get('/add-cart/{id}', "WebController@addCart")->middleware('auth');
Route::get('/buy-now/{id}', "WebController@buyNow")->middleware('auth');
Route::post('/add-cart/{id}', "WebController@addCart")->middleware('auth');
Route::get('/remove-cart/{id}', "WebController@removeCart")->middleware('auth');
Route::get('/clear-cart', "WebController@destroyCart")->middleware('auth');

Auth::routes();

Route::get('/home', 'WebController@homePage');

Route::get('/logout', function () {
    Illuminate\Support\Facades\Auth::logout();
    session()->flush();
    return redirect()->to('/');
});

Route::get('/check-out', "WebController@checkOut")->middleware('auth');
Route::post('/check-out', "WebController@placeOrder")->middleware('auth');
Route::get('/checkout-success', "WebController@checkSuccess")->middleware(
    'auth'
);

Route::get('/information', "WebController@getInfo")->middleware('auth');

Route::get('/order-list', "WebController@getOrderList")->middleware('auth');
Route::get('/order/{id}', "WebController@getOrderDetail")->middleware('auth');
Route::get('/order-again-{id}', "WebController@orderAgain")->middleware('auth');
Route::get('/order-cancel-{id}', "WebController@orderCancel")->middleware(
    'auth'
);

// exam
Route::get('/student', function () {
    $student_list = Student::all();
    return view('welcome', ["list" => $student_list]);
});
Route::get('/add', function () {
    return view('add_student');
});
Route::post('/add-student', function (Request $request) {
    $request->validate([
        "name" => "required|string",
        "age" => "required|integer",
        "address" => "required|string",
        "tel" => "required|string|unique"
    ]);
    try {
        Student::create([
            "name" => $request->get("name"),
            "age" => $request->get("age"),
            "address" => $request->get("address"),
            "telephone" => $request->get("tel")
        ]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    return redirect()->to("/student");
});

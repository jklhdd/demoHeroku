<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use Symfony\Component\Mime\Header\Headers;

class WebController extends Controller
{
    //

    public function postClassRoom(Request $request)
    {
        $student = [

            "name" => $request->get("input-name"),
            "address" => $request->get("input-address"),
            "email" => $request->get("input-email"),
            "phone" => $request->get("input-phone")

        ];

        array_push($_SESSION, $student);
        //dd($_SESSION);   
        return view("student_listing", ["student" => $_SESSION]);
    }
    public function getClassRoom()
    {
        //dd($_SESSION);
        return view("student_listing", ["student" => $_SESSION]);
    }
    public function addStudent()
    {
        # code...
        return view("create_student");
    }

    public function homePage()
    {
        $product = Product::take(10)->orderBy("product_name","asc")->get();
        return view('home',["product"=>$product]);
    }
    public function shopPage()
    {
        $product = Product::take(10)->where("category_id",5)->orderBy("product_name","asc")->get();
        return view('shop',["product"=>$product]);
    }

    public function singlePage()
    {
        $product = Product::find(1);
        return view('single',["product"=>$product]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Brand;
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
        $product1 = Product::take(8)
            ->join("category", "category.id", "=", "product.category_id")
            ->orderBy("price", "asc")
            ->select('product.*', 'category.id as cate_id')
            ->get();
        $product3 = Product::take(8)
            ->join("category", "category.id", "=", "product.category_id")
            ->orderBy("product.created_at", "asc")
            ->select('product.*', 'category.id as cate_id')
            ->get();
        $product2 = Product::take(8)
            ->join("category", "category.id", "=", "product.category_id")
            ->orderBy("price", "desc")
            ->select('product.*', 'category.id as cate_id')
            ->get();
        return view('home', [
            "product1" => $product1,
            "product2" => $product2,
            "product3" => $product3
        ]);
    }
    public function shopPage($b_id, $c_id)
    {
        //$product = Product::take(8)->join("category","category.id","=","product.category_id")->where("category.id",5)->orderBy("product_name","asc")->get();
        $product = Product::take(8)
            ->where("product.brand_id", $b_id)
            ->where("product.category_id", $c_id)
            ->orderBy("product_name", "asc")
            ->get();
        $category = Category::get();
        $brand = Brand::get();
        return view('shop', [
            "product" => $product,
            "category" => $category,
            "brand" => $brand
        ]);
    }
    public function shopList()
    {
        //$product = Product::take(8)->join("category","category.id","=","product.category_id")->where("category.id",5)->orderBy("product_name","asc")->get();

        $product = Product::all()->random(8);
        $category = Category::get();
        $brand = Brand::get();
        return view('shop', [
            "product" => $product,
            "category" => $category,
            "brand" => $brand
        ]);
    }

    public function singlePage($id)
    {
        $mainProduct = Product::find($id);
        $product_cate = Product::take(8)
            ->join("category", "category.id", "=", "product.category_id")
            ->where("category.id", $mainProduct->category_id)
            ->orderBy("product_name", "asc")
            ->select('product.*', 'category.id as cate_id')
            ->get();
        $product_brand = Product::take(8)
            ->join("brand", "brand.id", "=", "product.brand_id")
            ->where("brand.id", $mainProduct->brand_id)
            ->orderBy("product_name", "asc")
            ->select('product.*', 'brand.id as b_id')
            ->get();

        return view(
            'single',
            [
                "product_cate" => $product_cate,
                "product_brand" => $product_brand
            ],
            ["mainProduct" => $mainProduct]
        );
    }
}

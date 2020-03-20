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

    // public function postClassRoom(Request $request)
    // {
    //     $student = [
    //         "name" => $request->get("input-name"),
    //         "address" => $request->get("input-address"),
    //         "email" => $request->get("input-email"),
    //         "phone" => $request->get("input-phone")
    //     ];

    //     array_push($_SESSION, $student);
    //     //dd($_SESSION);
    //     return view("student_listing", ["student" => $_SESSION]);
    // }
    // public function getClassRoom()
    // {
    //     //dd($_SESSION);
    //     return view("student_listing", ["student" => $_SESSION]);
    // }
    // public function addStudent()
    // {
    //     # code...
    //     return view("create_student");
    // }

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
        $product = Product::where("product.brand_id", $b_id)
            ->where("product.category_id", $c_id)
            ->orderBy("product_name", "asc")
            ->paginate(9);
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

        $product = Product::paginate(9);
        //dd($product);
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
        $product_cate = Category::find($mainProduct->category_id)
            ->Products()
            ->orderBy("product_name", "asc")
            ->take(8)
            ->get();
        $product_brand = Brand::find($mainProduct->brand_id)
            ->Products()
            ->orderBy("product_name", "asc")
            ->take(8)
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

    public function cart(Request $request)
    {
        $cart = $request->session()->get("cart");

        return view("cart", ["cart" => $cart]);
    }
    public function checkOut()
    {
        return view("checkout");
    }

    public function addCart($id, Request $request)
    {
        $product = Product::find($id);
        if ($request->quantity <= 0) {
            $request->quantity = 1;
        }
        $cart = $request->session()->get("cart");
        if ($cart == null) {
            $cart = [];
        }

        foreach ($cart as $p) {
            if ($p->id == $product->id) {
                $p->cart_qty = $p->cart_qty + $request->quantity;
                session(["cart" => $cart]);
                return redirect()->back;
            }
        }
        $product->cart_qty = $request->quantity;
        $cart[] = $product;
        session(["cart" => $cart]);
        return redirect()->back();
    }

    public function buyNow($id, Request $request)
    {
        $product = Product::find($id);

        $cart = $request->session()->get("cart");
        if ($cart == null) {
            $cart = [];
        }

        foreach ($cart as $p) {
            if ($p->id == $product->id) {
                $p->cart_qty = $p->cart_qty + 1;
                session(["cart" => $cart]);
                return redirect()->to("cart");
            }
        }
        $product->cart_qty = 1;
        $cart[] = $product;
        session(["cart" => $cart]);
        return redirect()->to("cart");
    }

    public function removeCart($id, Request $request)
    {
        $cart = $request->session()->get("cart");
        $i = 0;
        foreach ($cart as $p) {
            if ($p->id == $id) {
                array_splice($cart, $i, 1);
                break;
            }
            $i = $i + 1;
        }
        session(["cart" => $cart]);
        return redirect()->to("cart");
    }

    public function destroyCart(Request $request)
    {
        $request->session()->forget("cart");
        return redirect()->to("cart");
    }
}

<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class AdminController extends Controller
{
    // category table
    public function category()
    {
        $category = Category::all();
        return view("admin.category.categorytable", ["category" => $category]);
    }
    public function addCategory()
    {
        return view("admin.category.create");
    }

    public function categoryStore(Request $request)
    {
        $request->validate([
            "category_name" => "required|string|unique:category"
        ]);

        try {
            Category::create([
                "category_name" => $request->get("category_name")
            ]);
        } catch (Exception $e) {
            //dd($e);
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    // brand table

    public function brand()
    {
        $brand = Brand::all();
        return view("admin.brand.brandtable", ["brand" => $brand]);
    }
    public function addBrand()
    {
        return view("admin.brand.create");
    }

    public function brandStore(Request $request)
    {
        $request->validate([
            "brand_name" => "required|string|unique:brand"
        ]);
        try {
            Brand::create([
                "brand_name" => $request->get("brand_name")
            ]);
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }

    // product table

    public function product()
    {
        $product = Product::all();
        return view("admin.product.producttable", ["product" => $product]);
    }
    public function addProduct()
    {
        return view("admin.product.create");
    }

    public function productStore(Request $request)
    {
        $request->validate([
            "product_name" => "required|string|unique:product",
            "product_desc" => "required|string",
            "thumbnail" => "required|string",
            "category_id" => "required|integer",
            "brand_id" => "required|integer",
            "price" => "required|numeric",
            "quantity" => "required|integer"
        ]);
        try {
            Product::create([
                "product_name" => $request->get("product_name"),
                "product_desc" => $request->get("product_desc"),
                "thumbnail" => $request->get("thumbnail"),
                "category_id" => $request->get("category_id"),
                "brand_id" => $request->get("brand_id"),
                "price" => $request->get("price"),
                "quantity" => $request->get("quantity")
            ]);
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }
}

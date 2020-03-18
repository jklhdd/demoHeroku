<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class AdminController extends Controller
{
    public function dashbroad()
    {
        return view("admin.home");
    }
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
        return redirect()->to("admin/tables/category");
    }

    public function categoryEdit($id)
    {
        $category = Category::find($id);
        return view("admin.category.edit", ['category' => $category]);
    }

    public function categoryUpdate($id, Request $request)
    {
        $category = Category::find($id);
        $request->validate([
            "category_name" =>
                "required|string|unique:category,category_name," . $id
        ]);
        try {
            $category->update([
                "category_name" => $request->get('category_name')
            ]);
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/tables/category");
    }

    public function categoryDestroy($id)
    {
        $category = Category::find($id);
        try {
            $category->delete();
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/tables/category");
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
        return redirect()->to("admin/tables/brand");
    }

    public function brandEdit($id)
    {
        $brand = Brand::find($id);
        return view("admin.brand.edit", ['brand' => $brand]);
    }

    public function brandUpdate($id, Request $request)
    {
        $brand = Brand::find($id);
        $request->validate([
            "brand_name" => "required|string|unique:brand,brand_name," . $id
        ]);
        try {
            $brand->update([
                "brand_name" => $request->get('brand_name')
            ]);
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/tables/brand");
    }

    public function brandDestroy($id)
    {
        $brand = Brand::find($id);
        try {
            $brand->delete();
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/tables/brand");
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
        return redirect()->to("admin/tables/product");
    }

    public function productEdit($id)
    {
        $product = Product::find($id);
        return view("admin.product.edit", ['product' => $product]);
    }

    public function productUpdate($id, Request $request)
    {
        $product = Product::find($id);
        $request->validate([
            "product_name" =>
                "required|string|unique:product,product_name," . $id,
            "product_desc" => "required|string",
            "thumbnail" => "required|string",
            "category_id" => "required|integer",
            "brand_id" => "required|integer",
            "price" => "required|numeric",
            "quantity" => "required|integer"
        ]);
        try {
            $product->update([
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
        return redirect()->to("admin/tables/product");
    }

    public function productDestroy($id)
    {
        $product = Product::find($id);
        try {
            $product->delete();
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/tables/product");
    }

    // product table

    public function user()
    {
        $user = User::all();
        return view("admin.user.usertable", ["user" => $user]);
    }

    public function userUpdate($id)
    {
        $user = User::find($id);

        try {
            if ($user->role == 0) {
                $user->role = 1;
                $user->save();
            } else {
                $user->role = 0;
                $user->save();
            }
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/tables/user");
    }
}

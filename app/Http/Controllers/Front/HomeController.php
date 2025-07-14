<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::all();
        $categorytypes = CategoryType::with('category')->get(); 
        return view('front.index', compact('user','categories','categorytypes'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('front.profile', compact('user'));
    }

     public function editProfile()
    {
        $user = Auth::user(); 
        return view('front.edit-profile', compact('user')); 
    }

    public function show($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $categorytypes = CategoryType::where('category_id', $id)->get();

        return view('front.categories.show', compact('category', 'categorytypes','categories'));
    }

    public function productshow($id)
    {
        $categories = Category::all();
        $types = Category::all();
        $categorytypes = CategoryType::findOrFail($id);
        $products = Product::where('category_type_id', $id)->get();

        return view('front.products.show', compact('products', 'categorytypes','categories','types'));
    }
    public function productdetail($id)
    {
        $categories = Category::all();
        $types = Category::all();
        $product = Product::findOrFail($id);
        $producttype = CategoryType::findOrFail($product->id);
        $products = Product::where('category_type_id', $producttype)->get();

        return view('front.products.detail', compact('products', 'product','producttype','categories','types'));
    }
}

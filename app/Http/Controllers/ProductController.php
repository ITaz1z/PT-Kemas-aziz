<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        $categories = ProductCategory::all();

        return view('products.index', compact('products', 'categories'));
    }

    public function byCategory($slug)
    {
        $category = ProductCategory::where('slug', $slug)->firstOrFail();
        $products = $category->products; // asumsinya relasi sudah benar
        $categories = ProductCategory::all();

        return view('products.by-category', compact('products', 'category', 'categories'));
    }


    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('products.show', compact('product'));
    }

    
}

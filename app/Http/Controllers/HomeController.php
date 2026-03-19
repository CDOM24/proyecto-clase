<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->take(6)->get();
        $categories = Category::all();

        return view("welcome", [
            "products"   => $products,
            "categories" => $categories
        ]);
    }
}
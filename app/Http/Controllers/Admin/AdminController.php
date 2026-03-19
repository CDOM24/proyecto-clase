<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        $totalProductos = Product::count();
        $totalCategorias = Category::count();

        return view('admin.index', [
            'totalProductos'  => $totalProductos,
            'totalCategorias' => $totalCategorias,
        ]);
    }
}
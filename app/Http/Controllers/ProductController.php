<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::orderBy('id','desc')->get();

        return view("product.index", [
            "misProductos" => $productList
        ]);
    }

    public function create()
    {
        $categoryList = Category::all();

        return view("product.create", [
            "categoryList" => $categoryList
        ]);
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre'      => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio'      => 'required|numeric|min:0',
        'categoria'   => 'required|exists:categories,id',
        'imagen'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $newProduct = new Product();
    $newProduct->name        = $request->nombre;
    $newProduct->description = $request->descripcion;
    $newProduct->price       = $request->precio;
    $newProduct->category_id = $request->categoria;

    if ($request->hasFile("imagen")) {
        $ruta = $request->file("imagen")->store('images', "public");
        $newProduct->image = $ruta;
    }

    $newProduct->save();

    return redirect()->route("product.index")
        ->with('success', 'Producto creado correctamente');
}

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view("product.show", [
            "product" => $product
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route("product.index");
    }
}
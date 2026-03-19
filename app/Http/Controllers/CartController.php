<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carrito = session()->get('carrito', []);
        $total = 0;
        foreach ($carrito as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }

        return view('cart.index', [
            'carrito' => $carrito,
            'total'   => $total
        ]);
    }

    public function agregar(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                'nombre'   => $product->name,
                'precio'   => $product->price,
                'imagen'   => $product->image,
                'cantidad' => 1,
            ];
        }

        session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function quitar($id)
    {
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }

        return redirect()->route('cart.index')->with('success', 'Producto eliminado del carrito');
    }

    public function vaciar()
    {
        session()->forget('carrito');
        return redirect()->route('cart.index')->with('success', 'Carrito vaciado');
    }
}
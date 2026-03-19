<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categorias.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.categorias.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Category::create([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categorias.index')
            ->with('success', 'Categoría creada correctamente');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categorias.form', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = Category::findOrFail($id);
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categorias.index')
            ->with('success', 'Categoría actualizada correctamente');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categorias.index')
            ->with('success', 'Categoría eliminada correctamente');
    }
}
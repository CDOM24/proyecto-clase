@extends('admin.layout')

@section('content')

<div style="padding: 40px 0;">
    <h2 style="font-size:32px; font-weight:700; margin-bottom:10px;">⚙️ Panel de Administración</h2>
    <p style="opacity:0.8; margin-bottom:40px;">Bienvenido al panel de control de tu tienda</p>

    <div class="product-grid">

        <div class="product-card" style="text-align:center; cursor:default;">
            <div style="font-size:48px; margin-bottom:15px;">📦</div>
            <div style="font-size:42px; font-weight:700;">{{ $totalProductos }}</div>
            <div style="font-size:16px; margin-top:8px;">Productos</div>
            <a href="{{ route('product.index') }}" class="btn" style="margin-top:15px; display:inline-block;">
                Ver productos
            </a>
        </div>

        <div class="product-card" style="text-align:center; cursor:default;">
            <div style="font-size:48px; margin-bottom:15px;">🗂️</div>
            <div style="font-size:42px; font-weight:700;">{{ $totalCategorias }}</div>
            <div style="font-size:16px; margin-top:8px;">Categorías</div>
            <a href="{{ route('admin.categorias.index') }}" class="btn" style="margin-top:15px; display:inline-block;">
                Ver categorías
            </a>
        </div>

    </div>
</div>

@endsection
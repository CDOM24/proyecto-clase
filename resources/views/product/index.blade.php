@extends('layout.app')

@section('content')

<!-- CONTENIDO -->
<div class="container">
    <div class="product-grid">

        <div class="product-card">
            <img src="https://picsum.photos/300/200?5">
            <div class="product-title">Control Gamer RGB Elite</div>
            <div class="rating">★★★★★</div>
            <div class="price">$59.99</div>
            <button class="btn">Agregar al carrito</button>
        </div>

        <div class="product-card">
            <img src="https://picsum.photos/300/200?6">
            <div class="product-title">Headset Pro Sound 7.1</div>
            <div class="rating">★★★★☆</div>
            <div class="price">$89.99</div>
            <button class="btn">Agregar al carrito</button>
        </div>

        <div class="product-card">
            <img src="https://picsum.photos/300/200?7">
            <div class="product-title">Teclado Mecánico Neon Edition</div>
            <div class="rating">★★★★★</div>
            <div class="price">$109.99</div>
            <button class="btn">Agregar al carrito</button>
        </div>

        <div class="product-card">
            <img src="https://picsum.photos/300/200?8">
            <div class="product-title">Mouse Gaming Ultra Speed</div>
            <div class="rating">★★★★☆</div>
            <div class="price">$44.99</div>
            <button class="btn">Agregar al carrito</button>
        </div>

    </div>
</div>

@endsection
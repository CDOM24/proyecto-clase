<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tienda</title>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<header>
    <h1>✨ Tienda</h1>
    <div class="search-bar">
        <input type="text" placeholder="Buscar productos...">
    </div>
</header>

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

</body>
</html>

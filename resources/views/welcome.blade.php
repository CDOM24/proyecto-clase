<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>✨ Tienda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- NAVBAR --}}
    <header class="navbar">
        <div class="nav-container">
            <h1 class="logo">✨ Tienda</h1>
            <nav>
                <a href="/">Inicio</a>
                <a href="{{ route('product.index') }}">Productos</a>
                <a href="{{ route('product.create') }}">Agregar</a>
            </nav>
        </div>
    </header>

    {{-- HERO --}}
    <div style="text-align:center; padding: 80px 20px 60px;">
        <h1 style="font-size: 52px; font-weight: 700; margin-bottom: 15px;">🛍️ Bienvenido a la Tienda</h1>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 35px;">Encuentra los mejores productos al mejor precio</p>
        <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('product.index') }}" class="btn">Ver Productos</a>
            <a href="{{ route('product.create') }}" class="btn">Agregar Producto</a>
        </div>
    </div>

    {{-- CATEGORÍAS --}}
    <div class="container">
        <h2 style="font-size:28px; font-weight:700; margin-bottom:25px; text-align:center;">🗂️ Categorías</h2>
        <div class="product-grid">
            @foreach ($categories as $category)
            <a href="{{ route('product.index') }}" class="product-card" style="text-decoration:none; text-align:center;">
                <div style="font-size:32px; margin-bottom:8px;">🏷️</div>
                <div style="font-size:16px; font-weight:600;">{{ $category->name }}</div>
                <div style="font-size:13px; opacity:0.8;">{{ $category->description }}</div>
            </a>
            @endforeach
        </div>
    </div>

    {{-- PRODUCTOS DESTACADOS --}}
    <div class="container">
        <h2 style="font-size:28px; font-weight:700; margin-bottom:25px; text-align:center;">⭐ Productos Destacados</h2>
        <div class="product-grid">
            @forelse ($products as $product)
            <a href="{{ route('product.show', $product->id) }}" class="product-card" style="text-decoration:none;">
                @if ($product->image && file_exists(public_path('storage/' . $product->image)))
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                @else
                    <img src="https://via.placeholder.com/300x200?text=Sin+imagen" alt="{{ $product->name }}">
                @endif
                <div class="product-title">{{ $product->name }}</div>
                <div class="price">${{ number_format($product->price, 2) }}</div>
                <span class="btn">Ver detalle</span>
            </a>
            @empty
            <p>No hay productos disponibles aún.</p>
            @endforelse
        </div>

        <div style="text-align:center; margin-top:35px;">
            <a href="{{ route('product.index') }}" class="btn">Ver todos los productos</a>
        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="footer">
        <p>✨ Tienda — Tu tienda online de confianza</p>
        <p>© 2026 Todos los derechos reservados</p>
    </footer>

</body>
</html>
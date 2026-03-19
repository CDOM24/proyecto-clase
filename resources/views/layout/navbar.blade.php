<header class="navbar">
    <div class="nav-container">
        <h1 class="logo">✨ Tienda</h1>
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('product.index') }}">Productos</a>
            <a href="{{ route('product.create') }}">Agregar</a>
            <a href="{{ route('cart.index') }}">🛒 Carrito</a>

        </nav>
    </div>
</header>
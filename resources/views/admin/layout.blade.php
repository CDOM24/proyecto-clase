<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tienda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="navbar">
        <div class="nav-container">
            <h1 class="logo">⚙️ Admin</h1>
            <nav>
                <a href="{{ route('admin.index') }}">Dashboard</a>
                <a href="{{ route('admin.categorias.index') }}">Categorías</a>
                <a href="{{ route('home') }}">← Volver a la tienda</a>
            </nav>
        </div>
    </header>

    <div class="container">
        @if(session('success'))
            <div class="error-box" style="background: rgba(0,200,0,0.2); border-color: rgba(0,200,0,0.5); margin-bottom:20px;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <footer class="footer">
        <p>⚙️ Panel de Administración — Tienda</p>
    </footer>

</body>
</html>
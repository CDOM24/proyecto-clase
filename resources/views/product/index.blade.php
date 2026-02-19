<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tienda</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: linear-gradient(135deg, #667eea, #764ba2, #ff758c);
        background-size: 300% 300%;
        animation: gradientMove 10s ease infinite;
        min-height: 100vh;
    }

    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* HEADER */
    header {
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    header h1 {
        font-size: 28px;
        font-weight: 700;
    }

    .search-bar input {
        padding: 10px 15px;
        width: 260px;
        border-radius: 30px;
        border: none;
        outline: none;
        font-size: 14px;
    }

    /* CONTENEDOR */
    .container {
        padding: 40px;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 30px;
    }

    /* TARJETAS */
    .product-card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 20px;
        color: white;
        transition: 0.4s ease;
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    .product-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 15px 30px rgba(0,0,0,0.4);
    }

    .product-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 15px;
        margin-bottom: 15px;
    }

    .product-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
        height: 45px;
        overflow: hidden;
    }

    .rating {
        color: #ffd700;
        margin-bottom: 8px;
    }

    .price {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 12px;
    }

    .btn {
        padding: 10px;
        width: 100%;
        border: none;
        border-radius: 30px;
        background: linear-gradient(45deg, #ff9a9e, #fad0c4);
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: linear-gradient(45deg, #a18cd1, #fbc2eb);
        transform: scale(1.05);
    }

    /* RESPONSIVE */
    @media (max-width: 600px) {
        header {
            flex-direction: column;
            gap: 15px;
        }

        .search-bar input {
            width: 100%;
        }
    }

</style>
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

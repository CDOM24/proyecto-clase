@extends('layout.app')

@section('content')

<!-- CONTENIDO -->
<div class="detail-wrapper">

    <div class="detail-grid">

        <!-- IMAGEN -->
        <div class="product-image">
            <img src="https://picsum.photos/600/400?9">
        </div>

        <!-- INFORMACIÓN -->
        <div class="product-info">
            <h2>Teclado Mecánico RGB Pro X</h2>
            <div class="product-id">ID Producto: #1024</div>

            <div class="rating">★★★★★</div>

            <div class="price">$129.99</div>

            <div class="status available">Disponible</div>

            <div class="description">
                Teclado mecánico profesional con switches de alta precisión,
                iluminación RGB personalizable y estructura de aluminio.
                Ideal para gaming competitivo y productividad avanzada.
            </div>

            <div class="actions">
                <button class="btn btn-primary">Agregar al carrito</button>
                <button class="btn btn-secondary">Volver</button>
            </div>
        
    </div>

</div>

@endsection

@extends('layout.app')

@section('content')

<!-- CONTENIDO -->
<div class="container">
    <div class="product-grid">
        @foreach ($misProductos as $product)

        <div class="product-card-enhanced">
            <div class="product-image">
                <span class="status-badge badge-active">Activo</span>
                @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="">
                @else
                <img src="https://preview.redd.it/this-is-mudkip-to-make-him-happy-plz-say-nice-things-to-him-v0-6cts5sv00wk61.jpg?auto=webp&s=52833ae4ab952b49b3fe2372f6bf87db52c842b8" alt="">
                @endif
            </div>


    <div class="product-info">
        <h3 class="product-name">{{ $product->name }}</h3>

        <div class="product-price">{{ $product->price }}</div>

        <p class="product-desc">
            {{ $product->description }}
        </p>

        <div class="card-actions">
            <button class="btn btn-secondary">Editar</button>
            <button class="btn btn-primary">Detalles</button>
        </div>
</div>
    @endforeach

    
</div>

@endsection
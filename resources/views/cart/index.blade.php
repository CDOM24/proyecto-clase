@extends('layout.app')

@section('content')

<div class="container">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
        <h2 style="font-size:28px; font-weight:700;">🛒 Mi Carrito</h2>
        <a href="{{ route('product.index') }}" class="btn">← Seguir comprando</a>
    </div>

    @if(session('success'))
        <div class="error-box" style="background: rgba(0,200,0,0.2); border-color: rgba(0,200,0,0.5); margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    @if(count($carrito) > 0)

        <div class="product-grid">
            @foreach ($carrito as $id => $item)
            <div class="product-card">
                @if($item['imagen'] && file_exists(public_path('storage/' . $item['imagen'])))
                    <img src="{{ asset('storage/' . $item['imagen']) }}" alt="{{ $item['nombre'] }}">
                @else
                    <img src="https://via.placeholder.com/300x200?text=Sin+imagen" alt="{{ $item['nombre'] }}">
                @endif

                <div class="product-title">{{ $item['nombre'] }}</div>
                <div class="price">${{ number_format($item['precio'], 2) }}</div>
                <div style="margin-bottom:15px;">Cantidad: {{ $item['cantidad'] }}</div>
                <div style="margin-bottom:15px; font-weight:600;">
                    Subtotal: ${{ number_format($item['precio'] * $item['cantidad'], 2) }}
                </div>

                <form action="{{ route('cart.quitar', $id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">🗑️ Quitar</button>
                </form>
            </div>
            @endforeach
        </div>

        <div style="text-align:right; margin-top:40px; font-size:24px; font-weight:700;">
            Total: ${{ number_format($total, 2) }}
        </div>

        <div style="text-align:right; margin-top:20px; display:flex; gap:15px; justify-content:flex-end;">
            <form action="{{ route('cart.vaciar') }}" method="POST">
                @csrf
                <button type="submit" class="btn" onclick="return confirm('¿Vaciar el carrito?')">
                    🗑️ Vaciar carrito
                </button>
            </form>
            <a href="#" class="btn">✅ Finalizar compra</a>
        </div>

    @else
        <div style="text-align:center; padding:80px 20px;">
            <div style="font-size:64px; margin-bottom:20px;">🛒</div>
            <h3 style="font-size:22px; margin-bottom:15px;">Tu carrito está vacío</h3>
            <a href="{{ route('product.index') }}" class="btn">Ver productos</a>
        </div>
    @endif

</div>

@endsection
@extends('layout.app')

@section('content')

<div class="detail-wrapper">

    <div class="detail-grid">

        <div class="product-image">
            @if ($product->image && file_exists(public_path('storage/' . $product->image)))
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
            @else
                <img src="https://via.placeholder.com/600x400?text=Sin+imagen" alt="{{ $product->name }}">
            @endif
        </div>

        <div class="product-info">

            <h2>{{ $product->name }}</h2>

            <div class="product-id">
                ID Producto: #{{ $product->id }}
            </div>

            <div class="price">
                ${{ number_format($product->price, 2) }}
            </div>

            <div class="status available">
                {{ __('messages.disponible') }}
            </div>

            <div class="description" style="margin: 20px 0; line-height: 1.6;">
                {{ $product->description }}
            </div>

            <div class="actions" style="display:flex; gap:15px; flex-wrap:wrap; margin-top:20px;">

                <a href="{{ route('product.index') }}" class="btn">
                    ← Volver
                </a>

                <a href="{{ route('product.create') }}" class="btn">
                    + Agregar otro
                </a>

                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" onclick="return confirm('¿Seguro que deseas eliminar este producto?')">
                        {{ __('messages.eliminar') }}
                    </button>
                </form>

            </div>
        </div>

    </div>

</div>

@endsection
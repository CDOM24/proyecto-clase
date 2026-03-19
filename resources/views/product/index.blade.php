@extends('layout.app')

@section('content')

<div class="container">
    <div class="product-grid">

        @forelse ($misProductos as $product)

        <div class="product-card-enhanced">

            <div class="product-image">
                <span class="status-badge badge-active">Activo</span>

                @if ($product->image && file_exists(public_path('storage/' . $product->image)))
                    <img src="{{ asset('storage/' . $product->image) }}" alt="">
                @else
                    <img src="https://via.placeholder.com/300x200?text=Sin+imagen" alt="">
                @endif
            </div>

            <div class="product-info">
                <h3 class="product-name">{{ $product->name }}</h3>

                <div class="product-price">
                    ${{ number_format($product->price, 2) }}
                </div>

                <p class="product-desc">
                    {{ $product->description }}
                </p>

                <div class="card-actions">

                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">
                        {{ __('messages.detalles') }}
                    </a>

                    <a href="#" class="btn btn-secondary">
                        {{ __('messages.editar') }}
                    </a>

                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            {{ __('messages.eliminar') }}
                        </button>
                    </form>

                </div>
            </div>

        </div>

        @empty

        <p>No hay productos disponibles.</p>

        @endforelse

    </div>
</div>

@endsection
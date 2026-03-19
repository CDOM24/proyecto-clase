@extends('layout.app')

@section('content')

<div class="detail-wrapper">

    <div class="detail-grid">

        <div class="product-image">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="">
            @else
                <img src="https://picsum.photos/600/400" alt="">
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
                Disponible
            </div>

            <div class="description">
                {{ $product->description }}
            </div>

            <div class="actions">

                <a href="{{ route('product.index') }}" class="btn btn-secondary">
                    Volver
                </a>

                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Eliminar
                    </button>
                </form>

            </div>
        </div>

    </div>

</div>

@endsection
@extends('admin.layout')

@section('content')

<div style="padding: 40px 0;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
        <h2 style="font-size:28px; font-weight:700;">🗂️ Categorías</h2>
        <a href="{{ route('admin.categorias.create') }}" class="btn">+ Nueva Categoría</a>
    </div>

    <div class="product-grid">
        @forelse ($categories as $category)
        <div class="product-card">
            <div style="font-size:32px; margin-bottom:10px;">🏷️</div>
            <h3 style="font-size:18px; font-weight:600; margin-bottom:8px;">{{ $category->name }}</h3>
            <p style="opacity:0.8; font-size:14px; margin-bottom:20px;">{{ $category->description }}</p>
            <div style="display:flex; gap:10px; flex-wrap:wrap;">
                <a href="{{ route('admin.categorias.edit', $category->id) }}" class="btn">
                    {{ __('messages.editar') }}
                </a>
                <form action="{{ route('admin.categorias.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" onclick="return confirm('¿Eliminar esta categoría?')">
                        {{ __('messages.eliminar') }}
                    </button>
                </form>
            </div>
        </div>
        @empty
        <p>No hay categorías aún.</p>
        @endforelse
    </div>
</div>

@endsection
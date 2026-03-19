@extends('admin.layout')

@section('content')

<div class="form-wrapper">
    <div class="form-card">
        <div class="form-header">
            <h2>{{ isset($category) ? '✏️ Editar Categoría' : '➕ Nueva Categoría' }}</h2>
        </div>

        @if ($errors->any())
        <div class="error-box">
            <p>Por favor corrige los errores:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ isset($category) ? route('admin.categorias.update', $category->id) : route('admin.categorias.store') }}" method="POST">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea id="description" name="description">{{ old('description', $category->description ?? '') }}</textarea>
            </div>

            <div style="display:flex; gap:15px; margin-top:10px;">
                <button type="submit" class="btn">
                    {{ isset($category) ? 'Actualizar' : 'Guardar' }}
                </button>
                <a href="{{ route('admin.categorias.index') }}" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection
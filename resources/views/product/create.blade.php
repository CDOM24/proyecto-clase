@extends('layout.app')

@section('content')

<div class="form-wrapper">

    <div class="form-card">

        <div class="form-header">
            <h2>Agregar Nuevo Producto</h2>
            <div class="product-id">ID: #1024</div>
        </div>

        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    placeholder="Ej: Teclado Mecánico RGB"
                    required
                >
            </div>

            <div class="row">

                <div class="form-group">
                    <label for="precio">Precio (USD)</label>
                    <input 
                        type="number" 
                        id="precio" 
                        name="precio" 
                        step="0.01"
                        placeholder="$0.00"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="estado">Categoría</label>
                    <select id="estado" name="categoria">
                        @foreach ($categoryList as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="form-group">
                <label for="imagen">Imagen del Producto</label>
                <input 
                    type="file" 
                    id="imagen" 
                    name="imagen"
                    accept="image/*"
                >
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea 
                    id="descripcion" 
                    name="descripcion"
                    placeholder="Describe el producto..."
                ></textarea>
            </div>

            <button type="submit" class="btn-submit">
                Guardar Producto
            </button>

        </form>

    </div>

</div>

@endsection
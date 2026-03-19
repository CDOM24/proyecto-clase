@extends('layout.app')

@section('content')

<div class="form-wrapper">

    <div class="form-card">

        <div class="form-header">
            <h2>Agregar Nuevo Producto</h2>
        </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    required
                >
            </div>

            <div class="row">

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input 
                        type="number" 
                        id="precio" 
                        name="precio" 
                        step="0.01"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select id="categoria" name="categoria">
                        @foreach ($categoryList as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input 
                    type="file" 
                    id="imagen" 
                    name="imagen"
                >
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea 
                    id="descripcion" 
                    name="descripcion"
                ></textarea>
            </div>

            <button type="submit">
                Guardar Producto
            </button>

        </form>

    </div>

</div>

@endsection 
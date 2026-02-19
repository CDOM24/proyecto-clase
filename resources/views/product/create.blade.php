@extends('layout.app')

@section('content')

<div class="form-wrapper">

    <div class="form-header">
        <h2>Agregar Nuevo Producto</h2>
        <div class="product-id">ID: #1024</div>
    </div>

    <form>

        <div>
            <label>Nombre del Producto</label>
            <input type="text" placeholder="Ej: Teclado Mecánico RGB">
        </div>

        <div class="row">
            <div>
                <label>Precio</label>
                <input type="number" placeholder="$0.00">
            </div>

            <div>
                <label>Estado</label>
                <select>
                    <option>Disponible</option>
                    <option>Agotado</option>
                    <option>En oferta</option>
                </select>
            </div>
        </div>

        <div>
            <label>Imagen del Producto</label>
            <input type="file">
        </div>

        <div>
            <label>Descripción</label>
            <textarea placeholder="Describe el producto..."></textarea>
        </div>

        <button type="submit" class="btn-submit">
            Guardar Producto
        </button>

    </form>

</div>

@endsection
<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'string'   => 'El campo :attribute debe ser texto.',
    'numeric'  => 'El campo :attribute debe ser un número.',
    'min'      => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'string'  => 'El campo :attribute debe tener al menos :min caracteres.',
    ],
    'max'      => [
        'string' => 'El campo :attribute no debe superar :max caracteres.',
    ],
    'image'    => 'El campo :attribute debe ser una imagen.',
    'mimes'    => 'El campo :attribute debe ser de tipo: :values.',
    'exists'   => 'El :attribute seleccionado no es válido.',

    'attributes' => [
        'nombre'      => 'nombre',
        'descripcion' => 'descripción',
        'precio'      => 'precio',
        'categoria'   => 'categoría',
        'imagen'      => 'imagen',
    ],
];
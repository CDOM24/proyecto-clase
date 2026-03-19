<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Electrodomésticos', 'description' => 'Productos para el hogar'],
            ['name' => 'Tecnología', 'description' => 'Dispositivos electrónicos'],
            ['name' => 'Ropa', 'description' => 'Vestimenta y accesorios'],
            ['name' => 'Deportes', 'description' => 'Artículos deportivos'],
            ['name' => 'Hogar', 'description' => 'Decoración y muebles'],
            ['name' => 'Juguetes', 'description' => 'Productos para niños'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
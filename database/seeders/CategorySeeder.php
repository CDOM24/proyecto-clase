<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        $category1 = new Category();
        $category1->name = 'Electrodomestico';
        $category1->description = 'Esta es la descripcion del electrodomestico';

        $category1->save();

        $category2 = new Category();
        $category2->name = '';
        $category2->description = 'Esta es la descripcion de la tecnologia';

        $category2->save();
    }
}

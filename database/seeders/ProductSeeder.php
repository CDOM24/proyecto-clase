<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
   
    public function run(): void
    {
        $product = new Product();
        $product->name = 'PC Gamer';
        $product->description = 'PC Gamer';
        $product->price = 10000;
        $product->category_id = Category::inRandomOrder()->first()->id;


        $product->save();

        $product2 = new Product();
        $product2->name = 'Laptop Gamer';
        $product2->description = 'Laptop Gamer';
        $product2->price = 15000;
        $product2->category_id = Category::inRandomOrder()->first()->id;


        $product2->save();


        $product3 = new Product();
        $product3->name = 'Smartphone';
        $product3->description = 'Smartphone';
        $product3->price = 5000;
        $product3->category_id = Category::inRandomOrder()->first()->id;


        $product3->save();

    }
}

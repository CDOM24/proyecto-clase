<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            //ProductSeeder::class,
        ]);

        // User::factory(100)->create();
        // Category::factory(100)->create();
        // Product::factory(200)->create();
        // CartItem::factory(300)->create();
    }
}
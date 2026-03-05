<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;

class ProductFactory extends Factory
{
    
    public function definition(): array
    {
        return [

            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 100, 1000000),
            'category_id' => Category::inRandomOrder()->first()->id,
            
        ];
    }
}

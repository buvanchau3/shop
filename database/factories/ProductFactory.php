<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'desc' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 10, 100), // Giá từ 10 - 100
            'img' => fake()->imageUrl(200, 200, 'products'), // URL hình ảnh giả
            'category_id' => \App\Models\Category::factory(), // Liên kết với Category
        ];
    }
}

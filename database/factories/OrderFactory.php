<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Order;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(), // hoặc $this->faker->name()
            'desc' => fake()->realText(),
            'status' => 0, // Giá trị mặc định
            'recever' => fake()->name(),
            'user_id' => User::factory(), // Tạo user ngẫu nhiên, nếu user_id luôn là 1 thì dùng 1
        ];
    }
}

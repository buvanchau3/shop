<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Tạo 10 danh mục
        Category::factory(10)->create();

        // Tạo 10 sản phẩm (mỗi sản phẩm sẽ thuộc danh mục ngẫu nhiên)
        Product::factory(10)->create();

        // Tạo 10 user
        User::factory(10)->create();

        // Tạo 10 đơn hàng (mỗi đơn hàng sẽ thuộc user ngẫu nhiên)
        Order::factory(10)->create();

        // Tạo 10 order items (mỗi order item sẽ thuộc order & product ngẫu nhiên)
        OrderItem::factory(10)->create();


    }
}

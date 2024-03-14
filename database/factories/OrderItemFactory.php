<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::query()->get()->random()->id,
            'product_id' => Product::query()->get()->random()->id,
            'count' => $this->faker->randomNumber(),
        ];
    }
}

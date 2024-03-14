<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::query()->get()->random()->id,
            'warehouse_id' => Warehouse::query()->get()->random()->id,
            'stock' => $this->faker->randomNumber(),
        ];
    }
}

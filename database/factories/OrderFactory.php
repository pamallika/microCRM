<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer' => $this->faker->word,
            'created_at' => now(),
            'completed_at' => now(),
            'warehouse_id' => Warehouse::query()->get()->random()->id,
            'status' => StatusEnum::cases()[rand(0,2)]->value,
        ];
    }
}

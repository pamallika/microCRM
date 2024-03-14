<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Stock;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory(10)->create();
        Warehouse::factory(10)->create();
        Order::factory(10)->create();
        OrderItem::factory(10)->create();
        Stock::factory(10)->create();
    }
}

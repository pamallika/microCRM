<?php

namespace App\Services;

use App\Enums\StatusEnum;
use App\Models\Order;

class OrderService
{

    public function create(array $data): Order
    {
        /** @var Order $order */
        $order = Order::query()->create($data);

        return $order;
    }

    public function update(Order $order, array $data): Order
    {
        $order->update($data);

        return $order;
    }

    public function active(Order $order): Order
    {
        $order->update(['status' => StatusEnum::Active->value]);

        return $order;
    }

    public function complete(Order $order): Order
    {
        $order->update(['status' => StatusEnum::Completed->value]);

        return $order;
    }

    public function cancel(Order $order): Order
    {
        $order->update(['status' => StatusEnum::Canceled->value]);

        return $order;
    }
}

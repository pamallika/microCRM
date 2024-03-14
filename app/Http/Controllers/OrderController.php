<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderCreateRequest;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderController extends Controller
{
    public function __construct(protected OrderService $service)
    {
    }

    public function index(Request $request)
    {

    }

    public function create(OrderCreateRequest $request): JsonResource
    {
        $data = $request->validated();

        return OrderResource::make($this->service->create($data));
    }

    public function update(OrderCreateRequest $request, Order $order): JsonResource
    {
        $data = $request->validated();

        return OrderResource::make($this->service->update($order, $data));
    }

    public function active(Order $order): JsonResource
    {
        return OrderResource::make($this->service->active($order));
    }

    public function complete(Order $order): JsonResource
    {
        return OrderResource::make($this->service->complete($order));
    }

    public function cancel(Order $order): JsonResource
    {
        return OrderResource::make($this->service->cancel($order));
    }
}

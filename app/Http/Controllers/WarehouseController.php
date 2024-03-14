<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaginateRequest;
use App\Http\Resources\Warehouse\WarehouseIndexResource;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class WarehouseController extends Controller
{
    public function index(PaginateRequest $request): JsonResource
    {
        $data = $request->validated();

        return WarehouseIndexResource::make(Warehouse::query()->paginate($data->per_page ?? null));
    }
}

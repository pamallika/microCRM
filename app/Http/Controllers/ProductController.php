<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaginateRequest;
use App\Http\Resources\Product\ProductsWithRemainResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    public function index(PaginateRequest $request): JsonResource
    {
        $data = $request->validated();

        return ProductsWithRemainResource::make(Product::query()->paginate($data->per_page ?? null));
    }
}

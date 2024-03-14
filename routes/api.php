<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'product',
    'controller' => ProductController::class,
], function () {
    Route::get('/', 'index');
});

Route::group([
    'prefix' => 'warehouse',
    'controller' => WarehouseController::class,
], function () {
    Route::get('/', 'index');
});

Route::group([
    'prefix' => 'order',
    'controller' => OrderController::class,
], function () {
    Route::get('/', 'index');
    Route::post('/', 'create');
    Route::put('/{order}', 'update');
    Route::patch('/{order}/active', 'active');
    Route::patch('/{order}/cancel', 'cancel');
    Route::patch('/{order}/complete', 'complete');
});

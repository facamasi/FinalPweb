<?php

use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\ProductoController;
use App\Http\Controllers\API\ProveedorController;
use App\Http\Controllers\API\InventarioController;
use App\Http\Controllers\API\TransaccionController;

Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('productos', ProductoController::class);
Route::apiResource('proveedores', ProveedorController::class);
Route::apiResource('inventarios', InventarioController::class);
Route::apiResource('transacciones', TransaccionController::class);

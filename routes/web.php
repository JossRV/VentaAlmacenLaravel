<?php

use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

Route::get("/",[PersonasController::class, "index"])->name("inicio");
Route::get("/ventas",[VentasController::class, "index"])->name("ventas");
Route::get("/productos",[ProductosController::class, "index"])->name("productos");
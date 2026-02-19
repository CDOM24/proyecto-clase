<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, '_invoke']);



Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/create', [ProductController::class, 'create']);

Route::get('/product/{producto}', [ProductController::class, 'show']);

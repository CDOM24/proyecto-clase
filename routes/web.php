<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, '_invoke']);


Route::prefix("product")->controller (ProductController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{producto}', 'show');
});

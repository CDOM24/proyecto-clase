<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, '_invoke']);


Route::prefix("product")->controller (ProductController::class)->group(function(){
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create');
    Route::post('/store', 'store')->name('product.store');
    Route::get('/{producto}', 'show');
});

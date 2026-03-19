<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix("product")->group(function(){

    Route::get('/test', [TestController::class, 'index']);

    Route::controller(ProductController::class)->group(function(){

        Route::get('/', 'index')->name('product.index');

        Route::get('/create', 'create')->name('product.create');

        Route::post('/', 'store')->name('product.store');

        Route::get('/{producto}', 'show')->name('product.show');

        Route::put('/{producto}', 'update')->name('product.update');

        Route::delete('/{producto}', 'destroy')->name('product.destroy');

    });

});
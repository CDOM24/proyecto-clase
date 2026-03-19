<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CartController;


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

Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::prefix('categorias')->name('categorias.')->controller(CategoryController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

});
Route::prefix('cart')->name('cart.')->controller(CartController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/agregar/{id}', 'agregar')->name('agregar');
    Route::delete('/quitar/{id}', 'quitar')->name('quitar');
    Route::post('/vaciar', 'vaciar')->name('vaciar');
});

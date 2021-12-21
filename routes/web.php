<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\CreateOrder;

Route::get('/', HomeController::class)->name('index');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('search', SearchController::class)->name('search');
Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');
Route::get('orders/create', CreateOrder::class)->middleware('auth')->name('orders.create');

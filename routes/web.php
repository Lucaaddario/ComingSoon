<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;


Route::get('/', [PublicController::class , 'welcome'])->name('welcome');
//Rotte dei prodotti (Film, anime, serie TV)
Route::get('crea-prodotto' , [ProductController::class , 'create_product'])->name('create_product');
Route::post('store-prodotto' , [ProductController::class , 'store_product'])->name('store_product');

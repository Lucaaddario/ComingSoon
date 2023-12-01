<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;


Route::get('/', [PublicController::class , 'welcome'])->name('welcome');

//Rotte dei prodotti (Film, anime, serie TV)
Route::get('/crea-prodotto' , [ProductController::class , 'create_product'])->name('create_product');
Route::post('/store-prodotto' , [ProductController::class , 'store_product'])->name('store_product');
Route::get('/modifica-prodotto/{product}' , [ProductController::class , 'edit_product'])->name('edit_product');
Route::put('/update-prodotto/{product}' , [ProductController::class , 'update_product'])->name('update_product');
Route::delete('/delete-prodotto/{product}' , [ProductController::class , 'delete_product'])->name('delete_product');

//Rotta dei film
Route::get('/films' , [ProductController::class , 'films_index'])->name('films_index');

//Rotta delle serie TV
Route::get('/tvseries' , [ProductController::class , 'series_index'])->name('series_index');

//Rotta degli Anime
Route::get('/anime' , [ProductController::class , 'anime_index'])->name('anime_index');

//Rotta del database Prodotti_Index
Route::get('/database-prodotti' , [PublicController::class , 'products_index'])->name('products_index');
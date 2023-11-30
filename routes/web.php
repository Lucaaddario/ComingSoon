<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;


Route::get('/', [PublicController::class , 'welcome'])->name('welcome');

//Rotte dei prodotti (Film, anime, serie TV)
Route::get('crea-prodotto' , [ProductController::class , 'create_product'])->name('create_product');
Route::post('store-prodotto' , [ProductController::class , 'store_product'])->name('store_product');

//Rotta dei film
Route::get('/films' , [ProductController::class , 'films_index'])->name('films_index');

//Rotta delle serie TV
Route::get('/tvseries' , [ProductController::class , 'series_index'])->name('series_index');

//Rotta degli Anime
Route::get('/anime' , [ProductController::class , 'anime_index'])->name('anime_index');

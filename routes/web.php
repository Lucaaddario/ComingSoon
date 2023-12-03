<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;


Route::get('/', [PublicController::class , 'welcome'])->name('welcome');

//Rotta premium_index
Route::get('/premium' ,[PublicController::class , 'premium_index'])->name('premium_index');

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

//Rotta del database Utente_Index
Route::get('/database-utente' , [PublicController::class , 'users_index'])->name('users_index');

//Rotta del database Delete_Users
Route::delete('/elimina-utente/{user}' , [PublicController::class , 'users_delete'])->name('users_delete');

//Rotta del database Update_Users
Route::get('/modifica-utente/{user}' , [PublicController::class , 'users_edit'])->name('users_edit');
Route::put('/update-utente/{user}' , [PublicController::class , 'users_update'])->name('users_update');

//Rotta del database Promote_Users
Route::put('/promuovi-utente/{user}' , [PublicController::class , 'users_promote'])->name('users_promote');
//Rotta del database Demote_Users
Route::put('/declassa-utente/{user}' , [PublicController::class , 'users_demote'])->name('users_demote');

//Rotta della pagina profilo_utente
Route::get('/profilo' ,[PublicController::class , 'users_profile'])->name('users_profile');
Route::get('/modifica-profilo' , [PublicController::class , 'edit_profile'])->name('edit_profile');
Route::put('/update-profilo' , [PublicController::class , 'update_profile'])->name('update_profile');

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use App\Models\Subcategory;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('films_index');
        $this->middleware('auth')->except('films_index');
    }

    //Funzione della rotta films_index
    public function films_index(){
        $productsByFilms = Product::where('category' , 'film')->orderBy('created_at' , 'desc')->get();
        $filmsByHorror = $productsByFilms->filter(function ($film) {
            return $film->subcategories->contains('name', 'Horror');
        });
        $filmsByDrama = $productsByFilms->filter(function ($film) {
            return $film->subcategories->contains('name' , 'Drama');
        });
        $filmsByComedy = $productsByFilms->filter(function ($film) {
            return $film->subcategories->contains('name' , 'Comedy');
        });
        $filmsByThriller = $productsByFilms->filter(function ($film) {
             return $film->subcategories->contains('name' , 'Thriller');
        });
        $filmsByErotic = $productsByFilms->filter(function($film) {
            return $film->subcategories->contains('name' , 'Eroitc');
        });
        $filmsByFantasy = $productsByFilms->filter(function($film) {
            return $film->subcategories->contains('name' , 'Fantasy');
        });
        $filmsByScience = $productsByFilms->filter(function($film) {
            return $film->subcategories->contains('name' , 'Science');
        });
        $filmsByRomance = $productsByFilms->filter(function($film) {
            return $film->subcategories->contains('name' , 'Romance');
        });
        return view ('films_index' , compact('productsByFilms' , 'filmsByFantasy' , 'filmsByComedy' , 'filmsByThriller' , 'filmsByErotic', 'filmsByFantasy', 'filmsByScience', 'filmsByRomance', 'filmsByHorror' , 'filmsByDrama'));
    }

    //Funzione della rotta series_index
    public function series_index(){
        $productsBySeries = Product::where('category' , 'series')->orderBy('created_at' , 'desc')->get();
        $seriesByHorror = $productsBySeries->filter(function ($serie) {
            return $serie->subcategories->contains('name', 'Horror');
        });
        $seriesByDrama = $productsBySeries->filter(function ($serie) {
            return $serie->subcategories->contains('name' , 'Drama');
        });
        $seriesByComedy = $productsBySeries->filter(function ($serie) {
            return $serie->subcategories->contains('name' , 'Comedy');
        });
        $seriesByThriller = $productsBySeries->filter(function ($serie) {
             return $serie->subcategories->contains('name' , 'Thriller');
        });
        $seriesByErotic = $productsBySeries->filter(function($serie) {
            return $serie->subcategories->contains('name' , 'Eroitc');
        });
        $seriesByFantasy = $productsBySeries->filter(function($serie) {
            return $serie->subcategories->contains('name' , 'Fantasy');
        });
        $seriesByScience = $productsBySeries->filter(function($serie) {
            return $serie->subcategories->contains('name' , 'Science');
        });
        $seriesByRomance = $productsBySeries->filter(function($serie) {
            return $serie->subcategories->contains('name' , 'Romance');
        });
        return view ('series_index' , compact('productsBySeries' , 'seriesByFantasy' , 'seriesByComedy' , 'seriesByThriller' , 'seriesByErotic', 'seriesByFantasy', 'seriesByScience', 'seriesByRomance', 'seriesByHorror', 'seriesByDrama' ));
    }

    //Funzione della rotta anime_index
    public function anime_index(){
        $productsByAnime = Product::where('category' , 'Anime')->orderBy('created_at' , 'desc')->get();
        $animeByHorror = $productsByAnime->filter(function ($anime) {
            return $anime->subcategories->contains('name', 'Horror');
        });
        $animeByDrama = $productsByAnime->filter(function ($anime) {
            return $anime->subcategories->contains('name' , 'Drama');
        });
        $animeByComedy = $productsByAnime->filter(function ($anime) {
            return $anime->subcategories->contains('name' , 'Comedy');
        });
        $animeByThriller = $productsByAnime->filter(function ($anime) {
             return $anime->subcategories->contains('name' , 'Thriller');
        });
        $animeByErotic = $productsByAnime->filter(function($anime) {
            return $anime->subcategories->contains('name' , 'Eroitc');
        });
        $animeByFantasy = $productsByAnime->filter(function($anime) {
            return $anime->subcategories->contains('name' , 'Fantasy');
        });
        $animeByScience = $productsByAnime->filter(function($anime) {
            return $anime->subcategories->contains('name' , 'Science');
        });
        $animeByRomance = $productsByAnime->filter(function($anime) {
            return $anime->subcategories->contains('name' , 'Romance');
        });
        return view ('anime_index' , compact('productsByAnime' , 'animeByFantasy' , 'animeByComedy' , 'animeByThriller' , 'animeByErotic', 'animeByFantasy', 'animeByScience', 'animeByRomance' , 'animeByHorror' , 'animeByDrama' ));
    }

    //Funzione vista form creazione prodotto
    public function create_product(){
        $subcategories = Subcategory::all();
        return view('create_product' , compact('subcategories'));
    }

    //Funzione della creazione del prodotto
    public function store_product(ProductRequest $request){
        $product = Product::create([
            'title'=>$request->input('title'),
            'category'=>$request->input('category'),
            'description'=>$request->input('description'),
            'user_id'=>Auth::user()->id,
        ]);

        if ($request->image) {
            $product->image = $request->file('image')->store('public/products/image');
            $product->save();
        }

        $product->subcategories()->attach($request->subcategories);
        //richiamerò i prodotti nella welcome ciclando $product->subcategories as subcategory essendo un array.
        return redirect(route('welcome'));
    }

}

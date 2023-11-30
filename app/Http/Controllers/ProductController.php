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
        $productsByFilms = Product::where('category' , 'film')->get();
        $filmsByThriller = $productsByFilms->filter(function ($film) {
            return $film->subcategories->contains('name', 'Thriller');
        });
        $filmsByFantasy = $productsByFilms->filter(function ($film) {
            return $film->subcategories->contains('name' , 'Fantasy');
        });

        return view ('films_index' , compact('productsByFilms' , 'filmsByThriller' , 'filmsByFantasy'));
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

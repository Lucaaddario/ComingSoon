<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //Funzione per la rotta 'Index':
    public function welcome() {
        $products = Product::All()->sortByDesc('created_at');
        $productsByFilms = Product::where('category' , 'film')->get();
        $productsBySeries = Product::where('category' , 'series')->get();
        $productsByAnime= Product::where('category' , 'anime')->get();
        return view('welcome' , compact('products' , 'productsByFilms', 'productsBySeries' , 'productsByAnime'));
    }
}

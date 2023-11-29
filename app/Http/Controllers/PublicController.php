<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //Funzione per la rotta 'Index':
    public function welcome() {
        $products = Product::All()->sortByDesc('created_at');
        return view('welcome' , compact('products'));
    }
}

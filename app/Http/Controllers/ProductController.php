<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    //Funzione vista form creazione prodotto
    public function create_product(){
        return view('create_product');
    }

    //Funzione della creazione del prodotto
    public function store_product(ProductRequest $request){
        $product = Product::create([
            'title'=>$request->input('title'),
            'category'=>$request->input('category'),
            'description'=>$request->input('description'),
            // 'user_id'=>Auth::user()->id,
        ]);

        if ($request->image) {
            $product->image = $request->file('image')->store('public/products/image');
            $product->save();
        }
        return redirect(route('welcome'));
    }

}

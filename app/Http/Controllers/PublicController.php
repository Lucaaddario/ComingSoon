<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('welcome' , 'premium_index');
        $this->middleware('admin')->except('welcome' , 'premium_index' , 'user_profile');
    }

    //Funzione per la rotta 'Index':
    public function welcome() {
        $products = Product::All()->sortByDesc('created_at');
        $productsByFilms = Product::where('category' , 'film')->get();
        $productsBySeries = Product::where('category' , 'series')->get();
        $productsByAnime= Product::where('category' , 'anime')->get();
        return view('welcome' , compact('products' , 'productsByFilms', 'productsBySeries' , 'productsByAnime'));
    }

    //Funzione per la rotta 'Premium_Index':
    public function premium_index() {
        return view('premium_index');
    }

    //Funzione per la rotta 'Premium_Index':
    public function users_profile() {
        return view('users_profile');
    }

    //Funzione per la rotta 'Users_Index':
    public function users_index() {
        $users = User::All();
        return view('users_index' , compact('users'));
    }

    //Funzione per la rotta 'Users_Edit':
    public function users_edit(User $user) {
        return view('users_edit' , compact('user'));
    }

    //Funzione per la rotta 'Users_Update':
    public function users_update(Request $request , User $user) {
        $user->update([
            $user->name = $request->name,
            $user->surname = $request->surname,
            $user->username = $request->username,
            $user->birthday = $request->birthday,
            $user->gender = $request->gender,
            $user->email =  $request->email,
            $user->password = $request->password,
        ]);
        return redirect(route('users_index' , compact('user')));
    }

    //Funzione per la rotta 'Users_Delete':
    public function users_delete(User $user) {
        $user->delete();
        return redirect(route('users_index'));
    }

    //Funzione per la rotta 'Users_Promote':
    public function users_promote(User $user) {
        $user->update([
            'isAdmin' => 1,
        ]);
        return redirect(route('users_index'));
    }

    //Funzione per la rotta 'Users_demote':
    public function users_demote(User $user) {
        $user->update([
            'isAdmin' => 0,
        ]);
        return redirect(route('users_index'));
    }

    public function products_index(){
        $productsByFilms = Product::where('category' , 'film')->get();
        $productsBySeries = Product::where('category' , 'series')->get();
        $productsByAnime = Product::where('category' , 'anime')->get();
        return view('products_index' , compact('productsByFilms' , 'productsBySeries' , 'productsByAnime'));
    }
}

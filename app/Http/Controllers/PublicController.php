<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //Funzione per la rotta 'Index':
    public function welcome() {
        return view('welcome');
    }
}

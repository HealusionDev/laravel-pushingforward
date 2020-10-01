<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if ($this->middleware(['auth','verified']) == TRUE){
            $request->session()->flash('success', 'Connexion réussie!');
            return view('accueil');
        }

        elseif ($this->middleware(['auth','verified']) == FALSE) {
            return view('accueil');
        }
    }
}

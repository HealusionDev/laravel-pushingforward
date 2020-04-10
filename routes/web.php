<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { #requete http avec address se terminant par /
    return view('home');
});

Route::get('home', function () { #requete http avec address se terminant par /home
    return view('home');
});

Route::get('team', function () { #requete http avec address se terminant par /team
    return view('team');
});

Route::get('user/new', function () { #requete http avec address se terminant par /team
    return view('newaccount');
});

Route::get('user/connect', function () { #requete http avec address se terminant par /team
    return view('connect');
});
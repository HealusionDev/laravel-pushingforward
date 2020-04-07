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
    return view('welcome');
});

Route::get('/test', function () { #requete http avec address se terminant par /test
    return view('test');
});

Route::get('blade', function () { #requete http avec address se terminant par /test
    return view('child');
});

Route::get('/home', function () { #requete http avec address se terminant par /test
    return view('home');
});
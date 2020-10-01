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
Route::get('', function () { #requete http avec address se terminant par /
    return view('accueil');
})->name('accueil');

Route::get('/', function () { #requete http avec address se terminant par /
    return view('accueil');
})->name('accueil');

Route::get('accueil', function () { #requete http avec address se terminant par /home
    return view('accueil');
})->name('accueil');

Route::get('team', function () { #requete http avec address se terminant par /team
    return view('team');
})->name('team');

Route::get('recettes', function () { #requete http avec address se terminant par /recettes
    return view('recettes');
})->name('recettes');

Route::get('vin', function () { #requete http avec address se terminant par /recettes
    return view('vin');
})->name('vin');

Route::get('guide-guyane', function () { #requete http avec address se terminant par /recettes
    return view('guide-guyane');
})->name('guide-guyane');

Route::get('guide-australie', function () { #requete http avec address se terminant par /recettes
    return view('guide-australie');
})->name('guide-australie');

Route::get('expedition-gr', function () { #requete http avec address se terminant par /recettes
    return view('expedition-gr');
})->name('expedition-gr');

Route::get('expedition-7summits', function () { #requete http avec address se terminant par /recettes
    return view('seven-summits');
})->name('expedition-7summits');

Route::get('rando-idf', function () { #requete http avec address se terminant par /recettes
    return view('rando-idf');
})->name('rando-idf');

Route::get('rando-pyrenees', function () { #requete http avec address se terminant par /recettes
    return view('rando-pyrenees');
})->name('rando-pyrenees');

Route::get('projet', function () { #requete http avec address se terminant par /recettes
    return view('projet');
})->name('projet');

Route::get('create-articles', function(){
    return view('admin/articles/create');
})->name('create-articles');

Auth::routes(['verify' => true]);

Route::get('/accueil', 'HomeController@index')->name('accueil');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(['can:manage-users','verified'])->group(function(){
    Route::resource('users','UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(['can:manage-users','verified'])->group(function(){
    Route::resource('articles','ArticlesController');
});

Route::get('/showpublic/{id}','ArticlesPublicController@showpublic')->name('showpublic');

Route::post('uploadimg','ImageController@uploadimage')->name('img');
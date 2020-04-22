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

Route::get('accueil', function () { #requete http avec address se terminant par /home
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

Route::get('recettes', function () { #requete http avec address se terminant par /recettes
    return view('recettes');
});

Route::get('vin', function () { #requete http avec address se terminant par /recettes
    return view('vin');
});

Route::get('guide-maroc', function () { #requete http avec address se terminant par /recettes
    return view('guide-maroc');
});

Route::get('guide-guyane', function () { #requete http avec address se terminant par /recettes
    return view('guide-guyane');
});

Route::get('guide-australie', function () { #requete http avec address se terminant par /recettes
    return view('guide-australie');
});

Route::get('corse-gr20', function () { #requete http avec address se terminant par /recettes
    return view('expedition-corse');
});

Route::get('expedition-7summits', function () { #requete http avec address se terminant par /recettes
    return view('kilimandjaro');
});

Route::get('conseil-materiel', function () { #requete http avec address se terminant par /recettes
    return view('materiel');
});

Route::get('rando-idf', function () { #requete http avec address se terminant par /recettes
    return view('rando-idf');
});

Route::get('rando-pyrenees', function () { #requete http avec address se terminant par /recettes
    return view('rando-pyrenees');
});

Route::get('createarticles', function () { #requete http avec address se terminant par /recettes
    return view('../textedit/createarticles');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users','UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('summernoteeditor',array('as'=>'summernoteeditor.get','uses'=>'SummernotefileController@getSummernoteeditor'));

Route::post('summernoteeditor',array('as'=>'summernoteeditor.post','uses'=>'SummernotefileController@postSummernoteeditor'));
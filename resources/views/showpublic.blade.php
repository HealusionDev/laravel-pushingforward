@extends ('layouts.app')

@section('title', 'Article')

@section('header')
    @parent
@endsection

@section('content')
    <hr id="header-bar" class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
    <h1 class="article-title1 text-center pt-3 pb-3">{{ $article->title }}</h1>    
    <div id="article-show" class="row p-0 m-0">
        <div id="article-show-menu" class="col-lg-2 pt-3 ml-auto" style="background-color: #6a6a6a; padding: 0.1rem;">
            <div class="article-chapter p-0 m-0">
                <form id="menufixe" class="form-inline" style="position: absolute; top: 8vh; left: 1.2vw;">
                    <input class="form-control mr-sm-0" type="search" placeholder="Rechercher" aria-label="Search" id="article-search-form">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div id="chapitre-article">
                    <ul id="chapitre-article-g1" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-cayenne" id="back1" style="text-decoration: none;"><li class="list-group-item">Cayenne</li></a>
                        <a href="#title-remire" id="back2" style="text-decoration: none;"><li class="list-group-item">Rémire-Montjoly</li></a>
                        <a href="#title-matoury" id="back3" style="text-decoration: none;"><li class="list-group-item">Matoury</li></a>
                        <a href="#title-routekaw" id="back4" style="text-decoration: none;"><li class="list-group-item">Route de Kaw</li></a>
                        <a href="#title-maraiskaw" id="back5" style="text-decoration: none;"><li class="list-group-item">Marais de Kaw</li></a>
                        <a href="#title-routemontsinery" id="back6" style="text-decoration: none;"><li class="list-group-item">Route de Montsinéry</li></a>
                        <a href="#title-macouria" id="back7" style="text-decoration: none;"><li class="list-group-item">Macouria</li></a>
                    </ul>
                    <ul id="chapitre-article-g2" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-kourou" id="back1" style="text-decoration: none;"><li class="list-group-item">Kourou</li></a>
                        <a href="#title-petitsaut" id="back2" style="text-decoration: none;"><li class="list-group-item">Petit Saut</li></a>
                        <a href="#title-sinnamary" id="back3" style="text-decoration: none;"><li class="list-group-item">Sinnamary</li></a>
                    </ul>
                    <ul id="chapitre-article-g3" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-saul" id="back1" style="text-decoration: none;"><li class="list-group-item">Saül</li></a>
                        <a href="#title-maripasoula" id="back2" style="text-decoration: none;"><li class="list-group-item">Maripasoula</li></a>
                    </ul>
                    <ul id="chapitre-article-g4" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-cacao" id="back1" style="text-decoration: none;"><li class="list-group-item">Cacao</li></a>
                        <a href="#title-regina" id="back2" style="text-decoration: none;"><li class="list-group-item">Régina</li></a>
                        <a href="#title-saintgeorge" id="back3" style="text-decoration: none;"><li class="list-group-item">Saint George de l'Oyapock</li></a>
                        <a href="#title-ouanary" id="back4" style="text-decoration: none;"><li class="list-group-item">Ouanary</li></a>
                        <a href="#title-oiapoque" id="back5" style="text-decoration: none;"><li class="list-group-item">Oiapoque</li></a>
                    </ul>
                    <ul id="chapitre-article-g5" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-iracoubo" id="back1" style="text-decoration: none;"><li class="list-group-item">Iracoubo</li></a>
                        <a href="#title-saintlau" id="back2" style="text-decoration: none;"><li class="list-group-item">Saint-Laurent du Maroni</li></a>
                        <a href="#title-voltaire" id="back3" style="text-decoration: none;"><li class="list-group-item">Chutes Voltaire</li></a>
                        <a href="#title-mana" id="back4" style="text-decoration: none;"><li class="list-group-item">Mana</li></a>
                        <a href="#title-awala" id="back5" style="text-decoration: none;"><li class="list-group-item">Awala</li></a>
                    </ul>
                    <ul id="chapitre-article-g6" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-video" id="back1" style="text-decoration: none;"><li class="list-group-item">Vidéo</li></a>
                        <a href="#title-byron" id="back2" style="text-decoration: none;"><li class="list-group-item">Byron Bay</li></a>
                        <a href="#title-goldcoast" id="back3" style="text-decoration: none;"><li class="list-group-item">Gold Coast</li></a>
                        <a href="#title-brisbane" id="back4" style="text-decoration: none;"><li class="list-group-item">Brisbane</li></a>
                        <a href="#title-bonus" id="back5" style="text-decoration: none;"><li class="list-group-item">Bonus</li></a>
                    </ul>
                    <ul id="chapitre-article-g7" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-video" id="back1" style="text-decoration: none;"><li class="list-group-item">Le périple</li></a>
                    </ul>
                    <ul id="chapitre-article-g8" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-video" id="back1" style="text-decoration: none;"><li class="list-group-item">Le périple</li></a>
                    </ul>
                    <ul id="chapitre-article-g10" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-bbanchoc" id="back1" style="text-decoration: none;"><li class="list-group-item">Barre banane chocolat</li></a>
                        <a href="#title-bbannois" id="back2" style="text-decoration: none;"><li class="list-group-item">Barre banane noisette</li></a>
                    </ul>
                    <ul id="chapitre-article-g11" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-pc1" id="back1" style="text-decoration: none;"><li class="list-group-item">La prépration</li></a>
                        <a href="#title-pc2" id="back2" style="text-decoration: none;"><li class="list-group-item">Premier jour</li></a>
                        <a href="#title-pc3" id="back3" style="text-decoration: none;"><li class="list-group-item">Arrivée au refuge</li></a>
                        <a href="#title-pc4" id="back4" style="text-decoration: none;"><li class="list-group-item">Lacs de Pouchergues et Caillauas</li></a>
                        <a href="#title-pc5" id="back5" style="text-decoration: none;"><li class="list-group-item">Le retour</li></a>
                    </ul>
                    <ul id="chapitre-article-g12" style="position: absolute; top: 18vh; left: 1.2vw; padding: 0; visibility: hidden;">
                        <a href="#title-rtk1" id="back1" style="text-decoration: none;"><li class="list-group-item">Episode 1</li></a>
                        <a href="#title-rtk2" id="back1" style="text-decoration: none;"><li class="list-group-item">Episode 2</li></a>
                        <a href="#title-rtk3" id="back1" style="text-decoration: none;"><li class="list-group-item">Episode 3</li></a>
                        <a href="#title-rtk4" id="back1" style="text-decoration: none;"><li class="list-group-item">Episode 4</li></a>
                        <a href="#title-rtk5" id="back1" style="text-decoration: none;"><li class="list-group-item">Episode 5</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div id="article-show-text" class="col-lg-7 pt-3 mr-auto" style="background-color: #f1f1f1">
            <div class="card-body p-0 m-0" style="position: relative;">
                {!! $article->detail !!}
            </div>
        </div>
    </div>
    <script src="{{ mix('js/searchbar.js') }}"></script>
@endsection

@section('footer')
    @parent
@endsection
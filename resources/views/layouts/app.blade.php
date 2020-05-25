<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">  --> 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
    </head>

    <body>                   
        <!-- Barre de navigation -->
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-0">            
                <div class="container-fluid" style="background-color: #e9ecef">
                    <a href="{{ route('accueil') }}"><img class="img-fluid sticky-top" src="/img/pflogo2.png" style="position: absolute;"></a>
                    <div class="container pl-0">
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto" style="margin-left: 145px;">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Inscrivez-vous') }}</a>
                                    </li>
                                @endif
                                @else

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                        @can('manage-users')
                                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                            Gestion des utilisateurs
                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin.articles.index') }}">
                                            Gestion des articles
                                        </a>
                                        @endcan

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Se déconnecter') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                 </li>
                             @endguest
                            </ul>


                            <!-- Right side of the bar -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>À propos<span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('team') }}">Equipe</a>
                                        <a class="dropdown-item" href="{{ route('projet') }}">Projet Pushing Forward</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>
            


            <div class="text-center d-flex align-items-end justify-content-center pt-3 pb-3" id="text-menu">
                <div class="dropdown">
                    <li id="mainbutton-menu1" class="mainbutton-menu dropdown-toggle">Gastronomie</li>
                        <div class="dropdown-child">
                            <a class="dropdown-child-link" href="{{ route('recettes') }}">
                                <div id="recettes-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Recettes</p>
                                </div>
                            </a>
                            <a class="dropdown-child-link" href="{{ route('vin') }}">
                                <div id="vin-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Vin</p>
                                </div>
                            </a>
                        </div>
                </div>
                <div class="dropdown">
                    <li id="mainbutton-menu2" class="mainbutton-menu dropdown-toggle">Guide Voyage</li>
                        <div class="dropdown-child">
                            <a class="dropdown-child-link" href="{{ route('guide-australie') }}">
                                <div id="australie-menu" class="d-flex justify-content-center align-items-center">    
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Australie</p>
                                </div>
                            </a>
                            <a class="dropdown-child-link" href="{{ route('guide-guyane') }}">
                                <div id="guyane-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Guyane</p>
                                </div>
                            </a>
                            <a class="dropdown-child-link" href="{{ route('guide-maroc') }}">
                                <div id="maroc-menu" class="d-flex justify-content-center align-items-center">    
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Maroc</p>
                                </div>
                            </a>
                        </div>
                </div>
                <div class="dropdown">
                    <li id="mainbutton-menu3" class="mainbutton-menu dropdown-toggle">Expéditions</li>
                        <div class="dropdown-child" style="right: 0%;">
                            <a class="dropdown-child-link" href="{{ route('corse-gr20') }}">
                                <div id="corse-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Corse : GR20</p>
                                </div>
                            </a>
                            <a class="dropdown-child-link"  href="{{ route('expedition-7summits') }}">
                                <div id="summits-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">7 Summits</p>
                                </div>
                            </a>
                            <a class="dropdown-child-link"  href="{{ route('conseil-materiel') }}">
                                <div id="materiel-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Matériel</p>
                                </div>
                            </a>
                        </div>
                </div>
                <div class="dropdown">
                    <li id="mainbutton-menu4" class="mainbutton-menu dropdown-toggle">Randonnées</li>
                        <div class="dropdown-child" style="right: 0%;">
                            <a class="dropdown-child-link" href="{{ route('rando-idf') }}">
                                <div id="idf-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Ile de France</p>
                                </div>
                            </a>
                            <a class="dropdown-child-link" href="{{ route('rando-pyrenees') }}">
                                <div id="pyrenees-menu" class="d-flex justify-content-center align-items-center">
                                    <p id="text-menu" style="font-size: 2.6rem; text-shadow: 1px 3px 15px #000; font-weight: 400; line-height: 1.6; margin: 0;">Pyrénées</p>
                                </div>
                            </a>
                        </div>
                </div>
            </div>

            <script src="{{ mix('js/header.js') }}"></script>

            <main class="contenu container-fluid p-0" style="position: relative;">
                @include('partials.alerts')
                @yield('content')
            </main>

            <!-- Pied de page --> 
            <footer>
                <div class="container-fluid p-0 m-0">
                    <div class="boxfooter text-center">
                        <h5 class="footertext text-center">&copy; pushing-forward.herokuapp.com</h5>
                    </div>
                </div>
            </footer>

        </div>
    </body>
</html>

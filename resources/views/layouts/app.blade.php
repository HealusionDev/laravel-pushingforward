<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet"> 
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">   --> 
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
        <div id="app" style="min-height: 100vh; display: flex; flex-direction: column; flex: 1; flex-grow: initial;">
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('team') }}">Equipe</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('accueil') }}">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>
            


            <div class="text-menu text-center d-flex align-items-end justify-content-center pt-3 pb-3">
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Gastronomie</li>
                        <div class="dropdown-child">
                            <a class="dropdown-child-link" href="{{ route('recettes') }}">Recettes</a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-child-link" href="{{ route('vin') }}">Vin</a>
                            </div>
                        </div>
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Guide Voyage</li>
                        <div class="dropdown-child">
                            <a class="dropdown-child-link" href="{{ route('guide-australie') }}">Australie</a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-child-link" href="{{ route('guide-guyane') }}">Guyane</a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-child-link" href="{{ route('guide-maroc') }}">Maroc</a>
                        </div>
                </div>
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Expéditions</li>
                        <div class="dropdown-child" style="width: text-size-adjust">
                            <a class="dropdown-child-link" href="{{ route('corse-gr20') }}">Corse : GR20 </a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-child-link"  href="{{ route('expedition-7summits') }}">Seven Summits</a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-child-link"  href="{{ route('conseil-materiel') }}">Matériel</a>
                        </div>
                </div>
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Randonnées</li>
                        <div class="dropdown-child">
                            <a class="dropdown-child-link" href="{{ route('rando-idf') }}">Ile de France</a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-child-link" href="{{ route('rando-pyrenees') }}">Pyrénées</a>
                        </div>
                </div>
            </div>

            <main class="contenu container-fluid justify-content-center p-0">
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

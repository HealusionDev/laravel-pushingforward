<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">  
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <script src="{{ mix('/js/app.js') }}"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
   
        <title>@yield('title')</title>
    </head>
    <body>
        @section('header')
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    
            <!-- Barre de navigation -->
            <nav class="navbar navbar-expand-md navbar-light bg-light p-0">
                
                <div class="form-row align-items-center my-1">
                    <div class="col-md-4 pl-3 pr-3">
                        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='../user/connect';">S'identifier</button>
                    </div>
                    <div class="col-md-8 pl-4">
                        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='../user/new';">Rejoignez-nous</button>
                    </div>
                </div>
                

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../accueil">Accueil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../team">Equipe</a>
                    </li>
                    <li class="nav-item active">
                            <a class="nav-link" href="../#">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Menu déroulant-->
            
             <!--   <img class="imgheader" src="/img/header5bis.png"> -->
        

            <div class="text-menu text-center d-flex align-items-end justify-content-center p-0" style="height: 14rem;">
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Gastronomie</li>
                        <div class="dropdown-child">
                            <a class="dropdown-child-link" href="../recettes">Recettes</a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-child-link" href="../vin">Vin</a>
                            </div>
                        </div>
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Guide Voyage</li>
                        <div class="dropdown-child">
                            <a class="dropdown-child-link" href="../guide-maroc">Maroc</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-child-link" href="../guide-guyane">Guyane</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-child-link" href="../guide-australie">Australie</a>
                                </div>
                        </div>
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Expéditions</li>
                        <div class="dropdown-child" style="width: text-size-adjust">
                                <a class="dropdown-child-link" href="../corse-gr20">Corse : GR20 </a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-child-link"  href="../expedition-7summits">Seven Summits</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-child-link"  href="../conseil-materiel">Matériel</a>
                                </div>
                        </div>
                <div class="dropdown">
                    <li class="mainbutton-menu dropdown-toggle">Randonnées</li>
                        <div class="dropdown-child">
                                <a class="dropdown-child-link" href="../rando-idf">Ile de France</a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-child-link" href="../rando-pyrenees">Pyrénées</a>
                
                        </div>
                </div>
            </div>
        @show

        <div class="container-fluid p-0">
            @yield('content')
        </div>

        @section('footer')
        <!-- Pied de page -->
        <footer>
            <div class="container-fluid">
                <div class="boxfooter text-center">
                    <div class="col-12">
                        <h5>&copy; nextadventure.fr</h5>
                    </div>
                </div>
            </div>
        </footer>
        @show

    </body>
</html>

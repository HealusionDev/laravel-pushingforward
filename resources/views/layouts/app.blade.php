<html>
    <head>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet"> <!-- FOR WEB -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <script src="{{ mix('/js/app.js') }}"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
   
        <title>@yield('title')</title>
    </head>
    <body>
        @section('header')
    
            <!-- Barre de navigation -->
            <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top p-0">
                
                <div class="form-row align-items-center my-1">
                    <div class="col-md-4 pl-3 pr-3">
                        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='../user/connect';">S'identifier</button>
                    </div>
                    <div class="col-md-8 pl-4">
                        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='../user/new';">Rejoignez-nous</button>
                    </div>
                </div>
                <!-- <ul class="navbar-nav ml-auto">
                    @guest
                    <li  class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>>
                        </li>
                    @endif
                @else
                    <li  class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    

                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="document.getElementById('logout-form').submit();">
                                {{ __('Logout')}}
                            </a>
                            <form id="logout-form" action="{{ route ('logout') }}" method="POST" style="...">
                                
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                
                 -->

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../home">Accueil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../team">Equipe</a>
                    </li>
                    <li class="nav-item active">
                            <a class="nav-link" href="#">Contact</a>
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
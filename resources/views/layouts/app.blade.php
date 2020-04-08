<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('/js/app.js') }}"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
   
        <title>@yield('title')</title>
    </head>
    <body>
        @section('header')
            <!-- Connexion -->
            <form method="post">
                <input class="connect" type="text" name="identifiant" id="identifiant" placeholder="Identifiant">
                <input class="connect" type="text" name="password" id="password" placeholder="Password">
                <input type="submit" name="Envoyer" id="formsend">
            </form>

            <!-- Création de compte -->
            <div class="newaccount">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='newaccount.php';">Créez votre compte</button>
            </div>

            <!-- Barre de navigation -->
            <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                <div class="container-fluid">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="home">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="team">Team</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                </div>
            </nav>

            <!-- Menu déroulant-->
            <div class="menu menu-expand-md bg-light">
                <div class="bloc text-center">
                    <img class="imgheader" src="/img/header4.png">
                    <div class="dropdown">
                        <li class="mainbutton-menu">Gastronomie</li>
                            <div class="dropdown-child">
                                <a class="dropdown-child-link" href="recette.html">Recettes</a>
                                <a class="dropdown-child-link" href="vin.html">Vin</a>
                            </div>
                    </div>
                    <div class="dropdown">
                        <li class="mainbutton-menu">Guide Voyage</li>
                            <div class="dropdown-child">
                                <a class="dropdown-child-link" href="maroc.html">Maroc</a>
                                <a class="dropdown-child-link" href="guyane.html">Guyane</a>
                                <a class="dropdown-child-link" href="australie.html">Australie</a>
                            </div>
                    </div>
                    <div class="dropdown">
                        <li class="mainbutton-menu">Expéditions</li>
                            <div class="dropdown-child">
                                <a class="dropdown-child-link" href="iledefrance.html">Corse : GR20 </a>
                                <a class="dropdown-child-link"  href="kilimandjaro.html">Seven Summits</a>
                                <a class="dropdown-child-link"  href="#.html">Matériel</a>
                            </div>
                    </div>
                    <div class="dropdown">
                        <li class="mainbutton-menu">Randonnées</li>
                            <div class="dropdown-child">
                                <a class="dropdown-child-link" href="iledefrance.html">Ile de France</a>
                                <a class="dropdown-child-link" href="pyrenees.html">Pyrénées</a>
                            </div>
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
                        <h5>&copy; mynextadventure.fr</h5>
                    </div>
                </div>
            </div>
        </footer>
        @show

    </body>
</html>
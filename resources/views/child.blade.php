@extends('layouts.app')

@section('title', 'Page Title')

@section('header')
    @parent
@endsection

@section('content')
    	<!-- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="/images/Guyane1.jpg">
				<div class="carousel-caption">
					<h1 class="display-2">Guyane</h1>
					<h2>Plongez au coeur de la forêt amazonienne</h2>
					<button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='guyane.html';">Lire le guide</button>
					<button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='guyane.html';">Les randonnées</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="/images/Maroc1.jpg">
					<div class="carousel-caption">
						<h1 class="display-2">Maroc</h1>
						<h2>L'antre des milles couleurs</h2>
						<button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='maroc.html';">Lire le guide</button>
						<button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='maroc.html';">Les randonnées</button>
					</div>
			</div>
			<div class="carousel-item">
				<img src="/images/Guyane1.jpg">
					<div class="carousel-caption">
						<h1 class="display-2">TBD</h1>
						<h2>TBD</h2>
					<button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='guyane.html';">Lire le guide</button>
					<button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='guyane.html';">Les randonnées</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Contenu -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-12">
				<p class="lead" align="center">Parce que la nature et les bons mets de notre terroir sont des sources d'inspiration inépuisables.<br/><br/>
				Parce que le partage d'itinéaires de trekking, d'astuces voyages, de délicieuses recettes healthy et d'expériences oenologique sont essentielles à notre épanouissement.
				</p>
			</div>
			<div class="col-12">
				<button type="button" class="btn btn-outline-secondary btn-lg" onclick="window.location.href='about.html';">En savoir plus</button>
			</div>
		</div>
	</div>

	<div class="container-fluid padding">
		<div class="row update text-center">
			<div class="col-12">
				<h1 class="display-4">Movies</h1>
				<hr class="style1">
			</div>
			
			<div class="col-12">
				<p class="lead">
					La dernière expédition en date remonte à l'année 2019 lors de mon voyage en Guyane.<br/>
					Pour un contenu vidéo il faudra revenir à l'aventure Australienne en 2017.<br/>
				</p>
				<p align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/59QYI9U9I2s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
	</div>
	
	<!-- Connect -->
	<div class="container-fluid padding">
		<div class="row connect text-center">
			<div class="col-12">
				<h2 class="display-5">Connect</h2>
				<hr class="style2">
			</div>
			<div class="col-12 social padding">
				<a href="https://www.facebook.com/cyrille.gayraud.0"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/cyrgrd/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCJ6nesNo0936uP7NhfiI96w?view_as=public"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
@endsection

@section('footer')
    @parent
@endsection

@extends('layouts.app')

@section('title', 'Pushing Forward')

@section('header')
    @parent
@endsection

@section('content')
    <!-- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
		</ul>
		<div class="carousel-inner">

			<div class="carousel-item active">
				<img class="carouselimg d-block mx-auto" src="/img/guyane3.jpg" data-holder-rendered="true">
					<div class="carousel-caption">
						<h1 class="carousel-titre1">Guyane</h1>
						<h2 class="carousel-titre2">Plongez au coeur de la forêt amazonienne</h2>
						<button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='../guide-guyane';">Lire le guide</button>
					</div>
			</div>
			<div class="carousel-item">
				<img class="carouselimg d-block mx-auto" src="/img/guyane4.jpg" data-holder-rendered="true">
					<div class="carousel-caption">
						<h1 class="carousel-titre1">Guyane</h1>
						<h2 class="carousel-titre2">Sur les traces de Dreyfus</h2>
						<button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='../guide-guyane';">Lire le guide</button>
					</div>
			</div>
		</div>
			<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			</a>
		  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>

	<!-- New Movies section -->
	<div class="container-fluid pt-3">
		<div class="row moviesbox text-center">
			<div class="col-12">
				<h1 class="movies-title">Movies</h1>
				<hr class="style1">
			</div>
			
			<div class="col-12 d-flex justify-content-center pt-3">
				<p class="lead text-center" style="width: 75%;">
					La dernière expédition en date remonte à l'année 2019 lors de mon voyage en Guyane.<br/>
					Pour un contenu vidéo il faudra revenir à l'aventure Australienne en 2017.<br/>
				</p>
			</div>
			<div class="col-12 d-flex justify-content-center pt-3"> 
				<iframe width="560" height="315" src="https://www.youtube.com/embed/59QYI9U9I2s" frameborder="0" SameSite="none" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
	<!-- Connect -->
	<div class="container-fluid pt-5">
		<div class="row connect text-center">
			<div class="col-12">
				<h2 class="connect-title">Connect</h2>
				<hr class="style2">
			</div>
			<div class="col-12 social-link p-3">
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

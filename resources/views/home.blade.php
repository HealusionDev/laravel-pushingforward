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
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="carouselimg d-block mx-auto" src="/img/rtk1.png" data-holder-rendered="true">
					<div class="carousel-caption">
						<h1 class="carousel-titre3">Road to Kilimandjaro</h1>
						<h2 class="carousel-titre4">Episode 1</h2>
						<button type="button" class="btn btn-success btn-lg" onclick="window.location.href='../expedition-7summits';">Suivez l'aventure</button>
					</div>
			</div>
			<div class="carousel-item">
				<img class="carouselimg d-block mx-auto" src="/img/guyane4.jpg" data-holder-rendered="true">
					<div class="carousel-caption">
						<h1 class="carousel-titre1">Guyane</h1>
						<h2 class="carousel-titre2">Sur les traces de Dreyfus</h2>
						<button type="button" class="btn btn-success btn-lg" onclick="window.location.href='../guide-guyane';">Lire le guide</button>
					</div>
			</div>
			<div class="carousel-item">
				<img class="carouselimg d-block mx-auto" src="/img/australia-home2.jpg" data-holder-rendered="true">
					<div class="carousel-caption">
						<h1 class="carousel-titre1">Australie</h1>
						<h2 class="carousel-titre2">Découvrez ses contrées sauvages</h2>
						<button type="button" class="btn btn-success btn-lg" onclick="window.location.href='../guide-australie';">Lire le guide</button>
					</div>
			</div>
		</div>
			<a class="carousel-control-prev" style="z-index: 5;" href="#slides" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" style="z-index: 5;" href="#slides" role="button" data-slide="next">
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
			
			<div class="col-lg-12 d-flex justify-content-center pt-3">
				<p class="lead text-center" style="width: 55%;">
					La série Road to Kilimandjaro fait ses débuts sur Youtube. Suivez-moi dans cette longue et éprouvante préparation. Au programme, des randonnées au quatre coins de la France et une préparation physique à la hauteur du challenge!<br>
				</p>
			</div>
			<div class="col-12 d-flex justify-content-center pt-3">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/vJYST00XHQU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
			</div>
			<div class="col-lg-12 d-flex justify-content-center pt-3">
				<p class="lead text-center" style="width: 55%;"><br><br>
					Retrouvez également les derniers épisodes sur l'aventure australienne.<br>
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
				<a href="https://www.facebook.com/Pushing-Forward-108628317526835"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/cyrgrd/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCJ6nesNo0936uP7NhfiI96w?view_as=public"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
@endsection

@section('footer')
    @parent
@endsection

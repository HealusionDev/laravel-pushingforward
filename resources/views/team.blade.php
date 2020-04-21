@extends('layouts.app')

@section('title', 'TEAM')

@section('header')
    @parent
@endsection

@section('content')
	<!-- L'équipe -->
	<div class="container-fluid pt-3">
		<div class="row team-box text-center">
			<div class="col-12">
				<h1 class="team-title1">L'équipe</h1>
				<h1 class="team-title2">Next Adventure</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Cartes équipe -->
	<div class="container-fluid pt-5">
		<div class="row team">
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte" style="width: 60%;">
					<img class="card-img-top" src="/img/Cy.jpg">
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Cyrille</h4>
						<p class="carte-text">Passionné d'aventures et de découvertes en tout genre, Cyrille vous emmenera sur des terrains encore inexplorés</p>
					</div>

				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte" style="width: 60%;">
					<img class="card-img-top" src="/img/Rem.jpg">
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Rémy</h4>
						<p class="carte-text">Aventurier gastronomique sans frontières, Rémy partagera avec vous ses meilleures découvertes culinaires et viticoles</p>
					</div>

				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte" style="width: 60%;">
					<img class="card-img-top" src="/img/Vinc.jpg">
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Vincent</h4>
						<p class="carte-text">Barroudeur de l'extrême, Vincent n'hésitera pas un seul instant pour vous proposer des itinéraires toujours plus fous!</p>
					</div>

				</div>
			</div>
		</div>
	</div>


	<!-- Connect -->
	<div class="container-fluid p-3">
		<div class="row connect text-center">
			<div class="col-12">
				<h2 class="connect-title">Connect</h2>
				<hr class="style2">
			</div>
			<div class="social-link d-flex justify-content-center p-3">
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
@extends('layouts.app')

@section('title', 'Guyane : le guide')

@section('header')
    @parent
@endsection

@section('content')
	<!-- Intro -->
	@can('manage-users')
	<div class="col-12 d-flex justify-content-right pt-3">
		<a href="{{ route('create-articles') }}"><button type="button" class="btn btn-success float-left">Création d'articles</button></a>
	</div>
	@endcan
	<div class="container-fluid">
		<div class="row team-box text-center">
			<div class="col-12 p-0">
				<h1 class="team-title1">Guyane</h1>
				<h1 class="team-title2 pt-2">Le Guide</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Contenu -->

	<div class="col-12 d-flex justify-content-center">
		<p class="lead text-center" style="width: 70%;">
		La Guyane, vaste territoire Français situé au coeur de l'amazonie propose mille et une richesses. Ce guide, construit et enrichit par Vincent Taconnat, vous présente les lieux remarquables de cette contrée sauvage et vous propose l'essentiel des activités à réaliser.</p>
	</div>
	
	<div class="container-fluid pt-5">
		<div class="row team">
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte" style="width: 60%;">
					<img class="card-img-top" src="/img/guyane-ce.jpg">
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Cayenne et ses environs</h4>
						<p class="carte-text">Passionné d'aventures et de découvertes en tout genre, Cyrille vous emmenera sur des terrains encore inexplorés</p>
						<a href="{{ route('showpublic', ['id' => 2]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
					</div>

				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte" style="width: 60%;">
					<img class="card-img-top" src="/img/guyane-ke.jpg">
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Kourou et ses environs</h4>
						<p class="carte-text">Aventurier gastronomique sans frontières, Rémy partagera avec vous ses meilleures découvertes culinaires et viticoles</p>
						<a href="{{ route('showpublic', ['id' => 3]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
					</div>

				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte" style="width: 60%;">
					<img class="card-img-top" src="/img/Vinc.jpg">
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">L'ouest</h4>
						<p class="carte-text">Barroudeur de l'extrême, Vincent n'hésitera pas un seul instant pour vous proposer des itinéraires toujours plus fous!</p>
						<a href="{{ route('showpublic', ['id' => 4]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
					</div>

				</div>
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
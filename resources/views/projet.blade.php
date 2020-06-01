@extends('layouts.app')

@section('title', 'Guyane : le guide')

@section('header')
    @parent
@endsection

@section('content')
	<!-- Intro -->
	<hr id="header-bar" class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">

	<div class="container-fluid pt-3">
		<div class="row team-box text-center">
			<div class="col-12 p-0">
				<h1 class="article-title1 pb-5">Pushing Forward</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Contenu -->

	<!-- Contenu Présentation -->
	<div class="container-fluid p-0">
		<div class="jumbotron">
			<div class="col-12 d-flex justify-content-center">
				<p class="lead text-justify" style="width: 75%;">Pushing Forward est une philosophie nous invitant à repousser nos limites et à toujours découvrir davantage.</br></br>
				Parce que la nature et les bons mets sont des sources d'inspiration inépuisables.<br/><br/>
				Parce que le partage d'itinéaires de trekking, d'astuces voyages, de délicieuses recettes et d'expériences oenologiques sont essentielles à notre épanouissement.
				</p>
			</div>
			<div class="col-12 d-flex justify-content-center">
				<button type="button" class="btn btn-outline-secondary btn-lg" onclick="window.location.href='../team';">En savoir plus</button>
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
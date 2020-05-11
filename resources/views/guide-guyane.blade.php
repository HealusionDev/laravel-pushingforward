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
	<div class="container-fluid pt-3">
		<div class="row team-box text-center">
			<div class="col-12 p-0">
				<h1 class="article-title1 pb-5">Guyane</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Contenu -->

	<div class="col-12 d-flex justify-content-center">
		<p class="lead text-center" style="width: 70%;">
		La Guyane, vaste territoire Français situé au coeur de l'amazonie propose mille et une richesses. Ce guide, construit et enrichit par Vincent Taconnat, vous présente les lieux remarquables de cette contrée sauvage et vous propose l'essentiel des activités à réaliser.</p>
	</div>
	
	<div class="container-fluid">
		<div class="row team align-top pt-3">
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte pt-5" style="width: 60%;">
					<a href="{{ route('showpublic', ['id' => 2]) }}">
						<img class="card-img-top" style="border-radius: 10px 40px; border: 1px solid #AFAFAF;" src="/img/guyane-ce.jpg">
					</a>
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Cayenne et ses environs</h4>
						<p class="carte-text">Découvrez Cayenne, Rémire-Montjoly, Matoury, la route de Montsinéry ainsi que les renommés et très sauvages Marais de Kaw.</p>
						<a href="{{ route('showpublic', ['id' => 2]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
					</div>

				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte pt-5" style="width: 60%;">
					<a href="{{ route('showpublic', ['id' => 3]) }}">
						<img class="card-img-top" style="border-radius: 10px; border: 1px solid #AFAFAF;" src="/img/guyane-ke.jpg">
					</a>
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Kourou et ses environs</h4>
						<p class="carte-text">Le centre spatial Guyanais, les îles du Salut, le lac de Petit Saut... Venez découvrir les surprises de la région de Kourou.</p>
						<a href="{{ route('showpublic', ['id' => 3]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
					</div>

				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte pt-5" style="width: 60%;">
					<a href="{{ route('showpublic', ['id' => 4]) }}">
						<img class="card-img-top" style="border-radius: 40px 10px; border: 1px solid #AFAFAF;" src="/img/guyane-saul.jpg">
					</a>
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">Le coeur de la Guyane</h4>
						<p class="carte-text">Saül et Maripasoula, zones reculées au fond de l'amazonie, sauront ravir les aventuriers les plus téméraires!</p>
						<a href="{{ route('showpublic', ['id' => 4]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
					</div>

				</div>
			</div>
		</div>
		<div class="row team d-flex justify-content-center align-top">
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte pt-5" style="width: 65%;">
					<a href="{{ route('showpublic', ['id' => 5]) }}">
						<img class="card-img-top" style="border-radius: 10px 40px; border: 1px solid #AFAFAF;" src="/img/guyane-e-o.jpg">
					</a>
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">L'est</h4>
						<p class="carte-text">Ce terrain sauvage en direction du Brésil propose de nombreux terrains de jeux! Venez vous aventurer sur le sentier Molokoï et Savane Roche, vous régaler au marché de Cacao ou vous prélasser sur les rives de la Comté.</p>
						<a href="{{ route('showpublic', ['id' => 5]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
					</div>

				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="carte pt-5" style="width: 65%;">
					<a href="{{ route('showpublic', ['id' => 6]) }}">
						<img class="card-img-top" style="border-radius: 40px 10px; border: 1px solid #AFAFAF;" src="/img/guyane-ouest.jpg">
					</a>
					<div class="carte-body text-center">
						<h4 class="carte-title pt-3">L'ouest</h4>
						<p class="carte-text">Le Maroni, ses secrets et ses rivages chargés d'histoire, saura vous surprendre! Lancez-vous à la découverte du Camp de la Transportation, des plages de sable blanc d'Awala-Yalimapo et des chutes Voltaire.</p>
						<a href="{{ route('showpublic', ['id' => 6]) }}"><button type="button" class="btn btn-success">Découvrir</button></a>
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
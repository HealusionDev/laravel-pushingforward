@extends('layouts.app')

@section('title', 'Guyane : le guide')

@section('header')
    @parent
@endsection

@section('content')
	<!-- Intro -->
	<hr id="header-bar" class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
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
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 2]) }}">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/guyane-ce.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Cayenne et ses environs</h4>
				<p class="carte-text-article">Découvrez Cayenne, Rémire-Montjoly, Matoury, la route de Montsinéry ainsi que les renommés et très sauvages Marais de Kaw.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 2]) }}"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 3]) }}">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/guyane-ke.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Kourou et ses environs</h4>
				<p class="carte-text-article">Le centre spatial Guyanais, les îles du Salut, le lac de Petit Saut... Venez découvrir les surprises de la région de Kourou.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 3]) }}"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 4]) }}">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/guyane-saul.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Le coeur de la Guyane</h4>
				<p class="carte-text-article">Saül et Maripasoula, zones reculées au fond de l'amazonie, sauront ravir les aventuriers les plus téméraires!</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 4]) }}"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 5]) }}">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/guyane-e-o.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">L'est</h4>
				<p class="carte-text-article">Ce terrain sauvage en direction du Brésil propose de nombreux terrains de jeux! Venez vous aventurer sur le sentier Molokoï et Savane Roche ou vous régaler au marché de Cacao.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 5]) }}"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 6]) }}">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/guyane-ouest.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">L'ouest</h4>
				<p class="carte-text-article">Le Maroni, ses secrets et ses rivages chargés d'histoire, saura vous surprendre! Lancez-vous à la découverte du Camp de la Transportation, des plages de sable blanc d'Awala-Yalimapo et des chutes Voltaire.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 6]) }}"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
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
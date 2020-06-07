@extends('layouts.app')

@section('title', 'Australie : le guide')

@section('header')
    @parent
@endsection

@section('content')
	<hr id="header-bar" class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
	
	@can('manage-users')
	<div class="col-12 d-flex justify-content-right pt-3">
		<a href="{{ route('create-articles') }}"><button type="button" class="btn btn-success float-left">Création d'articles</button></a>
	</div>
	@endcan
	
	<div class="container-fluid pt-3">
		<div class="row team-box text-center">
			<div class="col-12 p-0">
				<h1 class="article-title1 pb-5">Australie</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Contenu -->

	<div class="col-12 d-flex justify-content-center">
		<p class="lead text-justify" style="width: 65%;">
		L'Australie, cette île continent située down-under comme le décrive les Aussies, est un territoire immense aux milles-et-unes facettes. La diversité biologique y est gigantesque. Vous y trouverez tout type de climat (hormis polaire évidemment) et des paysages fabuleux. C'est le pays de l'aventure en road-trip! Equipez-vous d'un 4x4 et partez à la rencontre de cette contrée à la fois unique et surprenante. </p>
	</div>
	
	<div class="container-fluid">
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 8]) }}#">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/australie-menu1.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Sydney à Brisbane</h4>
				<p class="carte-text-article">Venez découvrir un fabuleux road-trip sur l'Australian East Coast, aussi dénommée Surfer Paradise. Découverte de spots de renoms Byron Bay, Gold Coast, Brisbane et retour in-lands.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 8]) }}#"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 9]) }}#">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/australie-menu2.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Wollongong à Port-Campbell</h4>
				<p class="carte-text-article">Partez à la découverte, de Canberra, du Kosciusko National Park et des trésors du Victoria. Parcours riche en surprise et en paysage à couper le souffle! </p>
				<div>
					<a href="{{ route('showpublic', ['id' => 9]) }}#"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 10]) }}#">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/australie-menu3.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Darwin à Uluru Kata Tjuta</h4>
				<p class="carte-text-article">Les contrées sauvages vous fascinent? Alors le Northern Territory a tout pour vous plaire! Venez découvrir les marais du Kakadu National Park et le désert rouge du centre australien.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 10]) }}#"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
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
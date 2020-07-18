@extends('layouts.app')

@section('title', 'Seven Summits')

@section('header')
    @parent
@endsection

@section('content')
	<!-- L'équipe -->
	<hr id="header-bar" class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
	
	@can('manage-users')
	<div class="col-12 d-flex justify-content-right pt-3">
		<a href="{{ route('create-articles') }}"><button type="button" class="btn btn-success float-left">Création d'articles</button></a>
	</div>
	@endcan
	
	<div class="container-fluid pt-5">
		<div class="row team-box text-center">
			<div class="col-12 p-0">
				<h1 class="article-title1 pb-5">Seven Summits</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Contenu -->

	<div class="col-12 d-flex justify-content-center">
		<p class="lead text-justify" style="width: 65%;">
		Seven Summits. Une aventure de rêve à l'assaut des plus hauts sommets de chaque continent. A l'honneur sur cette liste, nous retrouvons le mont Kosciusko, le mont Blanc, l'Elbrouz, le Kilimandjaro, le Denali, l'Aconcagua et l'Everest. L'Antartique étant exclue (massif Vinson), je l'ai subsistué au plus haut sommets d'Europe orientale, l'Elbrouz. Que l'aventure commence !</p>
	</div>
	
	<div class="container-fluid">
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 22]) }}#">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/miniature1.png">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Road to Kilimandjaro : Episode 1</h4>
				<p class="carte-text-article">Premier épisode de la série Road to Kilimandjaro. Suivez ma préparation de l'ascension du plus haut sommet d'Afrique. Aujourd'hui, partez à la découverte du GR652 avec moi! </p>
				<div>
					<a href="{{ route('showpublic', ['id' => 22]) }}#"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 17]) }}#">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/kilimandjaro.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Kilimandjaro</h4>
				<p class="carte-text-article">Le Kilimandjaro, plus haut sommet du continent africain, sera notre première étape dans la conquête des Seven Summits. Découvrez l'aventure, de la préparation à l'expédition!</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 17]) }}#"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 18]) }}#">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/materiel.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Le Matériel</h4>
				<p class="carte-text-article">Découvrez le matériel que nous avons utilisé pour l'ascension des Sevens Summits attentés.</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 18]) }}#"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
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
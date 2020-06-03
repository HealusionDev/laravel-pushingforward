@extends('layouts.app')

@section('title', 'Recettes')

@section('header')
    @parent
@endsection

@section('content')
	<!-- L'équipe -->
	<hr class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
	
	<@can('manage-users')
	<div class="col-12 d-flex justify-content-right pt-3">
		<a href="{{ route('create-articles') }}"><button type="button" class="btn btn-success float-left">Création d'articles</button></a>
	</div>
	@endcan
	
	<div class="container-fluid pt-3">
		<div class="row team-box text-center">
			<div class="col-12 p-0">
				<h1 class="article-title1 pb-5">Recettes</h1>
			</div>
			<hr>
		</div>
	</div>
	<!-- Contenu -->

	<div class="col-12 d-flex justify-content-center">
		<p class="lead text-justify" style="width: 65%;">
		</p>
	</div>
	
	<div class="container-fluid">
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 11]) }}/">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/volume-seche.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Opti' volume et calories</h4>
				<p class="carte-text-article">Vous manquez d'idées pour des recettes à fort volume alimentaire, faibles en calories et optimisées en macro et micro nutriment? Découvrez mes recettes!</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 11]) }}/"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
				</div>
			</div>
		</div>
		<div id="article" class="col-lg-8 mx-auto pl-0" style="display: flex; background-color: #e9ecef;">
			<div class="col-lg-5 pl-0 pr-0" style="flex: 1 1 auto; flex-direction: column;">
				<a href="{{ route('showpublic', ['id' => 12]) }}/">
					<img class="img-top" style="max-width: 100%; height: auto;" src="/img/energie-proteines.jpg">
				</a>
			</div>
			<div id="text-guyane" class="col-lg-3 mx-auto" style="display: flex; flex: 1 1 auto; flex-direction: column; justify-content: center; background-color: #e9ecef; padding-top: 1rem; padding-bottom: 1rem; margin: auto;">
				<h4 class="carte-title-article">Opti' énergie et protéines</h4>
				<p class="carte-text-article">Un plat ou une colation qui vous donne un maximum d'énergie tout en maintenant votre synthèse protéique optimale pendant et après vos séances de sport? C'est par ici!</p>
				<div>
					<a href="{{ route('showpublic', ['id' => 12]) }}/"><button id="discover-button" type="button" class="btn btn-success">Découvrir</button></a>
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
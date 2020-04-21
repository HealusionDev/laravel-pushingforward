@extends('layouts.app')

@section('title', 'Guyane : le guide')

@section('header')
    @parent
@endsection

@section('content')
	<!-- L'équipe -->
	<div class="container-fluid pt-3">
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
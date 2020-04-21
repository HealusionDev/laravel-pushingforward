@extends('layouts.app')

@section('title', 'Identification')

@section('header')
    @parent
@endsection

@section('content')
	<!-- L'équipe -->

	<div class="container-fluid p-0">
		<div class="team-box text-center">
			<div class="col-12 p-0">
				<h1 class="team-title1">S'identifier</h1>
			</div>
			<hr>
		</div>
	</div>
	
	<!-- Formulaire de connexion -->
	<ul class="nav justify-content-center pt-5">
		<form>
		  	<div class="form-inline">
			    <label for="inputEmail" class="col-sm-4 col-form-label" style="justify-content: left;">Email :</label>
			    <div class="col-sm-8">
			      	<input type="email" class="form-control" id="inputEmail" placeholder="Email">
			    </div>
		  	</div>
		  	<div class="form-inline pt-3">
		    	<label for="inputPassword" class="col-sm-4 col-form-label" style="justify-content: left;">Mot de passe :</label>
		   			 <div class="col-sm-8">
		      			<input type="password" class="form-control" id="inputPassword" placeholder="Password">
		    		</div>
	  		</div>
	   		<div class="form-group pt-5">
	    		<div class="col-sm-12 d-flex justify-content-center">
	      			<button type="submit" class="btn btn-primary">Sign in</button>
	    		</div>
	  		</div>
		</form>
	</ul>

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
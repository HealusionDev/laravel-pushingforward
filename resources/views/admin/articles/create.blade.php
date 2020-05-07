@extends('layouts.app')

@section('title', 'Création article')

@section('header')
    @parent
@endsection

@section('content')
	<body>
		<div class="container py-4">
		    <div class="row justify-content-center">
		        <div class="col-12">
		            <div class="card">
		                <div class="card-header article-wrapper">Création d'article</div>
							<div class="card-body">
								<form method="POST" action="{{ route('admin.articles.store') }}">
									@csrf
									{{ method_field('POST') }}
									<div class="form-group">
										<input type="text" name="title" placeholder="Titre de l'article" class="form-control title">
									</div>

									<div class="form-group">
										<textarea name="detail" id="detail" class="form-control detail" placeholder="Contenu de l'article..." cols="30" rows="40"></textarea>
									</div>

									<div class="form-group d-flex justify-content-center">
								       	<input type="submit" name="send" id="send" class="btn btn-success mr-3" value="Envoyer">
								      	<input type="button" name="clear" id="clear" class="btn btn-danger ml-3" value="Effacer">
  									</div>
								</form>
							</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<script src="{{ mix('js/summernote_create.js') }}"></script>
	
@endsection
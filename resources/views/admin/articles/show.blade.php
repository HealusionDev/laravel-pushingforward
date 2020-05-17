@extends ('layouts.app')


@section('content')
<hr class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <div class="card-header">{{ $article->title }}</div>
                  <div class="card-body">
                    {!! $article->detail !!}
                  </div>
                  <div class="modifier">
                    <a href="{{ route('admin.articles.edit', $article->id) }}"><button type="button" class="btn btn-primary float-left">Modifier</button></a>
                  </div>
          </div>
    </div>
</div>
@endsection
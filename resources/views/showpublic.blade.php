@extends ('layouts.app')


@section('content')
    <hr class="style3">    
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <div class="article-chapter"></div>
        </div>
        <div class="col-xs-12 col-md-9">
            <h1 class="article-title1 text-center">{{ $article->title }}</h1>
              <div class="card-body">
                {!! $article->detail !!}
              </div>
        </div>
    </div>
@endsection
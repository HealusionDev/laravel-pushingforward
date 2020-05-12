@extends ('layouts.app')


@section('content')
    <hr class="style3">
    <h1 class="article-title1 text-center">{{ $article->title }}</h1>    
    <div class="row p-0 m-0">
        <div class="col-md-3 p-0 m-0">
            <div class="article-chapter p-0 m-0"></div>
        </div>
        <div class="col-md-9 p-0 m-0">
            <div class="card-body p-0 m-0">
                {!! $article->detail !!}
            </div>
        </div>
    </div>
@endsection
@extends ('layouts.app')


@section('content')
    <hr class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
    <h1 class="article-title1 text-center pt-3">{{ $article->title }}</h1>    
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
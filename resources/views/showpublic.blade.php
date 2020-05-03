@extends ('layouts.app')


@section('content')
            <div class="container py-4">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <h1 class="article-title1 text-center">{{ $article->title }}</h1>
                          <div class="card-body">
                            {!! $article->detail !!}
                          </div>
                    </div>
                </div>
            </div>
@endsection
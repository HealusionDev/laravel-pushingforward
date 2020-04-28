@extends ('layouts.app')


@section('content')
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                          <div class="card-header">{{ $article->title }}</div>
                              <div class="card-body">
                                {!! $article->detail !!}
                              </div>
                      </div>
                </div>
            </div>
@endsection
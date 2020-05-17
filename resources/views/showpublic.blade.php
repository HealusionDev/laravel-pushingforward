@extends ('layouts.app')


@section('content')
    <hr class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
    <h1 class="article-title1 text-center pt-3 pb-3">{{ $article->title }}</h1>    
    <div class="row p-0 m-0">
        <div class="col-md-2 pt-3 ml-auto" style="background-color: #6a6a6a; padding: 0.1rem;">
            <div class="article-chapter p-0 m-0">
                <form class="form-inline" id="menufixe" style="position: absolute; top: 8vh; left: 1.2vw;">
                    <input class="form-control mr-sm-0" type="search" placeholder="Rechercher" aria-label="Search" id="article-search-form">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </form>
            </div>
        </div>
        <div class="col-md-8 pt-3 mr-auto" style="background-color: #f1f1f1">
            <div class="card-body p-0 m-0">
                {!! $article->detail !!}
            </div>
        </div>
    </div>

    <script src="{{ mix('js/searchbar.js') }}"></script>
@endsection
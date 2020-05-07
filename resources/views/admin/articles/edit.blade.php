@extends ('layouts.app')


@section('content')
          <body>
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                          <div class="card-header article-wrapper">Modifier un article : {{ $article->title }}</div>
                          <div class="card-body">
                            <form action="{{ route('admin.articles.update', $article) }}" method="POST">
                              @csrf
                              {{ method_field('PUT') }}
                              <div class="form-group">
                                <input type="text" name="title" class="form-control title" value="{{ $article->title }}" required autocomplete="title" autofocus>
                              </div>

                              <div class="form-group">
                                <textarea name="detail" id="detail" class="form-control detail" autofocus></textarea>
                              </div>

                              <div class="form-group d-flex justify-content-center">
                                <input type="submit" name="update" id="send" class="btn btn-success mr-3" value="Update">
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

              <script>
                $(document).ready(function() {
                    //assign the variable passed from controller to a JavaScript variable.
                    var content = {!! json_encode($article->detail) !!};
                    $('#detail').summernote('code', content);
                })
              </script>
@endsection
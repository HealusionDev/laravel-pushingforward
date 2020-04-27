@extends ('layouts.app')


@section('content')
          <body>
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                          <div class="card-header">Edit article : {{ $article->title }}</div>
                          <div class="card-body">
                            <form action="{{ route('admin.articles.update', $article) }}" method="POST">
                              <div class="form-group">
                                <input type="text" name="title" class="form-control title" value="{{ $article->title }}" required autocomplete="title" autofocus>
                              </div>

                              <div class="form-group">
                                <textarea name="detail" id="detail" class="form-control detail" autofocus></textarea>
                              </div>

                              <div class="form-group d-flex justify-content-center">
                                <input type="submit" name="update" id="send" class="btn btn-success mr-3" value="Update">
                                <input type="button" name="clear" id="clear" class="btn btn-danger ml-3" value="Effacer">
                                {{ csrf_field() }}
                              </div>
                              {{ csrf_field() }}
                              {{ method_field('PUT') }}
                            </form> 
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
              </body>

              <script type="text/javascript">
                  $(document).ready(function() {
                    //initialize summernote
                    $('#detail').summernote();
                    //assign the variable passed from controller to a JavaScript variable.
                    var content = {!! json_encode($article->detail) !!};
                    $('#detail').summernote('code', content);
                })

                $('#clear').on('click',function(){
                  $('#detail').summernote('code',null);
                })
              </script>
@endsection
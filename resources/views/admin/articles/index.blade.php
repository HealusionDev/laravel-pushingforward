@extends ('layouts.app')

@section('content')
  <hr class="style3" style="position: absolute; top: 0px; left: 50%; transform: translate(-50%, 0%);">
  <div class="container py-4">
      <div class="row justify-content-center">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">Articles</div>

                  <div class="card-body">
                          <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($articles as $article)
                                  <tr>
                                    <th scope="row">{{ $article->id }}</th>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->date_creation }}</td>
                                    <td>
                                        <a href="{{ route('admin.articles.show', $article->id) }}"><button type="button" class="btn btn-success float-left">Afficher</button></a>
                                        <a href="{{ route('admin.articles.edit', $article->id) }}"><button type="button" class="btn btn-primary float-left">Modifier</button></a>
                                        
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="float-left">
                                          <div id="dialog-confirm" title="Confirmation de la suppression" style="display:none;">
                                              <p>
                                                <span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
                                                Etes-vous sûr de vouloir supprimer cet élément ?
                                              </p>
                                          </div>
                                          @csrf
                                          {{ method_field('DELETE') }}
                                          <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                      </td>
                                  </tr>
                              @endforeach
                            </tbody>
                          </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
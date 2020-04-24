@extends ('layouts.app')

@section('content')
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Articles</div>

                            <div class="card-body">
                                    <table class="table">
                                      <thead class="thead-light">
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Date de création</th>
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
                                                    <a href="{{ route('admin.articles.edit', $article->id) }}"><button type="button" class="btn btn-primary float-left">Modifier</button></a>
                                                    
                                                    <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="float-left">
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
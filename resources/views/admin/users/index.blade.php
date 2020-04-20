@extends ('layouts.app')

@section('content')
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Utilisateurs : </div>

                            <div class="card-body">
                                    <table class="table">
                                      <thead class="thead-light">
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Nom</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Roles</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($users as $user)
                                             <tr>
                                                <ol start="1">
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ implode(', ', $user->roles()->pluck('name')->toArray()) }}</td>
                                                <td>
                                                    @can('edit-users')
                                                      <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary float-left">Modifier</button></a>
                                                    @endcan
                                                    @can('delete-users')
                                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form>
                                                    @endcan
                                                </td>
                                              </ol>
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
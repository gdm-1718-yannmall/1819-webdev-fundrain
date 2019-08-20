@extends('backoffice.layout')

@section('title')
    dashboard | Users
@endsection

@section('content')
<nav class="breadcrumb is-small" aria-label="breadcrumbs">
        <ul>
          <li><a href="#">Home</a></li>
          <li class="is-active"><a href="#" aria-current="page">Tables</a></li>
        </ul>
      </nav>

      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="title">Fundrain Users</div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
                <a class="button is-info" href="users/create">New user</a>
          </div>
        </div>
      </div>

      <div class="columns is-multiline">
        <div class="column">
            <table class="table is-striped is-fullwidth">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>avatar</th>
                    <th>Email</th>
                    <th> <abbr title="Email Verified">Verif.</abbr></th>
                    <th>Credits</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                      <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>avatar</th>
                          <th>Email</th>
                          <th> <abbr title="Email Verified">Verif.</abbr></th>
                          <th>Credits</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Actions</th>
                      </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>
                                <figure class="image is-32x32">
                                    <img src="{{ $user->avatar }}">
                                </figure>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>@if($user->email_verified_at) Y @else N @endif</td>
                            <td>{{ $user->credits }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary"><a href="/users/{{ $user->id }}/edit">Edit</a></button>
                                    </div>
                                    <div class="control">
                                        <form method="POST" action="/users/{{ $user->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="button is-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              <nav class="pagination is-centered" role="navigation" aria-label="pagination">
                  <a class="pagination-previous">Previous</a>
                  <a class="pagination-next">Next page</a>
                  <ul class="pagination-list">
                    <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                    <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
                    <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
                    <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                    <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
                  </ul>
                </nav>
        </div>
      </div>
@endsection
      
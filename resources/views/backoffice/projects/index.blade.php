@extends('backoffice.layout')

@section('title')
    dashboard | Projects
@endsection

@section('content')
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="title">Fundrain Projects</div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
                <a class="button is-info" href="/backoffice/projects/create">New Project</a>
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
                        <th>Description</th>
                        <th>Image</th>
                        <th>Owner</th>
                        <th>Categorie</th>
                        <th>$ needed</th>
                        <th>$ earned</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                      <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Owner</th>
                          <th>Categorie</th>
                          <th>$ needed</th>
                          <th>$ earned</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Actions</th>
                      </tr>
                </tfoot>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th>{{ $project->id }}</th>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>
                                <figure class="image is-32x32">
                                    <img src="{{ $project->image }}">
                                </figure>
                            </td>
                            <td>{{ $project->user['name']}}</td>
                            <td>{{ $project->categorie['name'] }}</td>
                            <td>{{ $project->funds_goal }}</td>
                            <td>{{ $project->funds_state }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->updated_at }}</td>
                            <td>
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary"><a href="/backoffice/projects/{{ $project->id }}/edit">Edit</a></button>
                                    </div>
                                    <div class="control">
                                        <form method="POST" action="/backoffice/projects/{{ $project->id }}">
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
      
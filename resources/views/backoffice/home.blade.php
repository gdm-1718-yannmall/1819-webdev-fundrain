@extends('backoffice.layout')
@section('title')
dashboard
@endsection
@section('content')
<div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="title has-text-primary"><i class="fa fa-tachometer"></i> Dashboard</div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <button type="button" class="button is-small">
              March 8, 2017 - April 6, 2017
            </button>
          </div>
        </div>
      </div>

<div class="columns is-multiline">
    <div class="column">
        <div class="box notification is-primary">
            <div class="heading">#Users on Fundrain</div>
            <div class="title">{{ $users->count() }}</div>
            <div class="level">
                <div class="level-item">
                    <div class="">
                        <div class="heading">Today</div>
                        <div class="title is-5">{{ $users->where('created_at', '>', today())->count() }}</div>
                    </div>
                </div>
                <div class="level-item">
                    <div class="">
                        <div class="heading">Updated today</div>
                        <div class="title is-5">{{ $users->where('updated_at', '>', today())->count() }}</div>
                    </div>
                </div>
                <div class="level-item">
                        <div class="">
                            <div class="heading">Deleted today</div>
                            <div class="title is-5">{{ $users->where('deleted_at', '>', today())->count() }}</div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="box notification is-warning">
            <div class="heading">#projects on Fundrain</div>
            <div class="title">{{ $projects->count() }}</div>
            <div class="level">
                <div class="level-item">
                    <div class="">
                        <div class="heading">Got $</div>
                        <div class="title is-5">{{ $projects->where('funds_state', !0)->count() }}</div>
                    </div>
                </div>
                <div class="level-item">
                    <div class="">
                        <div class="heading">Fully $</div>
                        <div class="title is-5">{{ $projects['reached_goal']->count() }}</div>
                    </div>
                </div>
                <div class="level-item">
                    <div class="">
                        <div class="heading">Added Today</div>
                        <div class="title is-5">{{ $projects->where('created_at', '>', today())->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="box notification is-info">
            <div class="heading">Comments</div>
            <div class="title">{{ $comments->count() }}</div>
            <div class="level">
                <div class="level-item">
                    <div class="">
                        <div class="heading">Today</div>
                        <div class="title is-5">{{ $comments->where('created_at', '>', today())->count()}}</div>
                    </div>
                </div>
                <div class="level-item">
                    <div class="">
                        <div class="heading">Deleted</div>
                        <div class="title is-5">{{ $comments->where('deleted_at')->count() }}</div>
                    </div>
                </div>
                <div class="level-item">
                    <div class="">
                        <div class="heading">Updated today</div>
                        <div class="title is-5">{{ $comments->where('updated_at', '>', today())->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

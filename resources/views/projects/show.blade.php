@extends('layouts.projects')

@section('content')
<section class="column">
        <h1 class='title'>{{ $project->title }}</h1>

        <div class="content">
            {{ $project->description}}
        </div>
    
        @if ($project->comments->count())
            <div class="box">
                @foreach ($project->comments as $comment)
                <div class="media">
                        <div class="media-left">
                            <figure class="image is-96x96">
                                <img src="{{ $comment->user['avatar']}}" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-5 no-padding">{{ $comment->content }}</p>
                            
                            <p class="subtitle is-6">By: {{ $comment->user['name'] }}</p>
                            <span class="tag is-rounded">{{ $comment->created_at->format('d m Y h:m a') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    
        {{-- Add a new comment --}}
        <form method="POST" action="/projects/{{ $project->id }}/comments" class="box">
            @csrf
            <div class="field">
              <label class="label" for="content">Comment</label>
              <div class="control">
                <input class="input" name="content" type="text" placeholder="Comment content">
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button type="submit" class="button is-link">send</button>
              </div>
            </div>
    
            @include('partials.errors')
        </form>
</section>
@endsection
@extends('layouts.pages')

@section('hero')
<section class="hero is-info is-medium is-bold" >
        <div class="hero-body"  style="background-image: url('/images/desk.jpg')">
            <div class="container has-text-centered">
                <h1 class="title" style="color: black">test</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')

<div class="tabs is-boxed is-fullwidth">
    <ul>
        @foreach ($categories as $categorie)
                <li><a href="#tab{{ $categorie->id }}" data-toggle="tab">{{ $categorie->name }}</a></li>
        @endforeach
    </ul>
</div>

<div class="tab-content">
    @foreach ($categories as $categorie)
        <div class="tab-pane" id="tab{{ $categorie->id }}">
            <div class="row columns">
                    @foreach ($projects->where('categorie_id', $categorie->id) as $project)
                    <div class="column is-one-third">
                            <div class="card large">
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="{{ $project->image }}" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="image is-96x96">
                                                    <img src="{{ $project->user['avatar']}}" alt="Image">
                                                </figure>
                                            </div>
                                            <div class="media-content">
                                                <p class="title is-5 no-padding">{{ $project->name }}</p>
                                                
                                                <p class="subtitle is-6">{{ $project->user['name'] }}</p>
                                            </div>
                                        </div>
                                        <div class="content project-description">
                                            {{ $project->description }}
                                        </div>
                                        <div class="button is-info"><a href="/projects/{{ $project->id }}">view project</a></div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
    
                </div>
            </div>
    @endforeach
</div>

   
<script>
    $('.tabs').each(function(index) {
      var $tabParent = $(this);
      var $tabs = $tabParent.find('li');
      var $contents = $tabParent.next('.tab-content').find('.tab-pane');

      $tabs.click(function() {
        var curIndex = $(this).index();
        // toggle tabs
        $tabs.removeClass('is-active');
        $tabs.eq(curIndex).addClass('is-active');
        // toggle contents
        $contents.removeClass('active');
        $contents.eq(curIndex).addClass('active');
      });
    });
</script>

@endsection




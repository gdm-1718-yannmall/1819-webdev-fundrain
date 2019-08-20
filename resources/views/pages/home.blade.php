@extends('layouts.pages')

@section('hero')
    <section class="hero is-info is-medium is-bold" >
        <div class="hero-body"  style="background-image: url({{ $pageData->image }})">
            <div class="container has-text-centered">
                <h1 class="title" style="color: black">{!! $pageData->slug !!}</h1>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="section">
        @for ($i = 0; $i <= $projects->count(); $i++)
            @if ($projects->where('categorie_id', $i)->first() !== null)
                <h1 class="title">{{ $projects->where('categorie_id', $i)->first()->categorie['name'] }}</h1>
                <div class="row columns">
                @foreach ($projects->where('categorie_id', $i)->take(3) as $project)
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
                                            {{-- <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p> --}}
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
            @endif        
        @endfor
        
       
        {{-- End Developers --}}

        {{-- Newest products --}}
        {{-- <h1 class="title">Newest products</h1> --}}
        <!-- Staff -->
        {{-- <div class="row columns is-multiline">
                @for ($i = 0; $i < 3; $i++)
                <div class="column is-one-third">
                    <div class="card large">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="https://source.unsplash.com//Rfflri94rs8" alt="Image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-96x96">
                                            <img src="https://i.imgsafe.org/a4/a4bb9acc5e.jpeg" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4 no-padding">Sphirou Sapphirou</p>
                                        <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>
                                        <p class="subtitle is-6">Moderator</p>
                                    </div>
                                </div>
                                <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequatur numquam aliquam tenetur ad amet inventore hic beatae, quas accusantium perferendis sapiente explicabo, corporis totam! Labore reprehenderit beatae magnam animi!
                                        <div class="background-icon"><span class="icon-twitter"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
            </div> --}}
            </div>
                
@endsection
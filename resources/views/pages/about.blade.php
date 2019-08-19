@extends('layouts.pages')

@section('hero')
    <section class="hero is-info is-medium is-bold" >
        <div class="hero-body"  style="background-image: url({{ $pageData->image }})">
            <div class="container has-text-centered">
                {{-- <h1 class="title">About Us</h1> --}}
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="articles">
    <div class="card article">
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title article-title">{{ $pageData->slug }}</p>
                    </div>
                </div>
                <div class="content article-body">
                    @foreach ($pageData->content as $content)
                        <p>{!! $content !!}</p>
                    @endforeach
                    
                </div>
                 
                  
                
            </div>
        </div>
    </section>
@endsection


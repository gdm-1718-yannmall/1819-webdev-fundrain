@extends('layouts.news')

@section('heroImage')
    url('{{ $article->image }}')
@endsection
    
@section('heroText')
    
@endsection

@section('content')
<section class="articles">
        <div class="column is-8 is-offset-2">
    <!-- START ARTICLE -->
    <div class="card article">
            <div class="card-content">
                <div class="media">
                    <div class="media-content has-text-centered">
                        <p class="title article-title">{{ $article->title }}</p>
                        <div class="tags has-addons level-item">
                            <span class="tag is-rounded is-info">{{ $article->author }}</span>
                            <span class="tag is-rounded">{{ $article->created_at->format('d m Y') }}</span>
                        </div>
                    </div>
                </div>
                <div class="content article-body">
                    <p>{!! $article->intro !!}</p>
                    <p>{!! $article->content !!}</p>
                    <a href="/news">Back to overview</a>
                </div>
                 
                  
                
            </div>
        </div>
        <!-- END ARTICLE -->
    <!-- START PROMO BLOCK -->
    <section class="hero is-info is-bold is-small promo-block">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        <i class="fa fa-bell-o"></i> Nemo enim ipsam voluptatem quia.</h1>
                    <span class="tag is-black is-medium is-rounded">
                            Natus error sit voluptatem
                        </span>
                </div>
            </div>
        </section>
        <!-- END PROMO BLOCK -->
        
      </div>

</section>
<!-- END ARTICLE FEED -->
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

    
    
    <title>Fundrain</title>

    <style>
        
    </style>
</head>

<body class='has-navbar-fixed-top'>
    @include('partials.header')

    <section class="hero is-info is-medium is-bold" >
        <div class="hero-body"  style="background-image:@yield('heroImage')">
            <div class="container has-text-centered">
                <h1 class="title" style="color: black">@yield('heroText', 'Looks like you forgot the section->heroText')</h1>
            </div>
        </div>
    </section>

    <div class="container">
        @yield('content')
    </div>

    {{-- @include('partials/footer') --}}
    @include('partials.scripts')
</body>

</html>

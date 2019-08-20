<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">

    <meta name="language" content="en-EN" />
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/backoffice.css">
</head>

<body class='has-navbar-fixed-top'>
    <header class="hero">
        <div class="hero-head">
            @include('backoffice/partials.navbar')
            {{-- <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item is--brand">
                        <img class="navbar-brand-logo" src="/images/Logo.png" alt="Bulma Admin Template logo">
                    </a>
                    <a class="navbar-item is-tab is-hidden-mobile is-active"><span class="icon is-medium"><i class="fa fa-home"></i></span>Home</a>
                    <a class="navbar-item is-tab is-hidden-mobile" href="https://github.com/mazipan/bulma-admin-dashboard-template">Github</a>
                    <a class="navbar-item is-tab is-hidden-mobile" href="https://mazipan.github.io/bulma-resume-template/">Resume Template</a>
                    <a class="navbar-item is-tab is-hidden-mobile" href="#about">About</a>

                    <button class="button navbar-burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <div class="navbar-menu navbar-end" id="navMenu">
                    <a class="navbar-item is-tab is-hidden-tablet is-active">Home</a>
                    <a class="navbar-item is-tab is-hidden-tablet" href="https://github.com/mazipan/bulma-admin-dashboard-template">Github</a>
                    <a class="navbar-item is-tab is-hidden-tablet" href="https://mazipan.github.io/bulma-resume-template/">Resume Template</a>
                    <a class="navbar-item is-tab is-hidden-tablet" href="#about">About</a>
                    <a class="navbar-item nav-tag"><span class="icon is-small"><i class="fa fa-envelope-o"></i></span><span class="tag is-primary tag-notif">6</span></a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <figure class="image is-32x32" style="margin-right:.5em;">
                                <img src="{{ $current_user->avatar }}">
                            </figure>
                            {{ $current_user->name }}
                        </a>

                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item">
                                <span class="icon is-small">
                                    <i class="fa fa-user-o"></i>
                                </span>
                                &nbsp; Profile
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon is-small">
                                    <i class="fa fa-power-off"></i>
                                </span>
                                &nbsp; Logout
                            </a>
                        </div>
                    </div>
                </div>    
            </nav> --}}
            
        </div>
    </header>

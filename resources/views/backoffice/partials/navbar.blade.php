<nav class="navbar is-fixed-top is-spaced has-shadow" role="navigation" aria-label="main navigation">
    <div class="container">
        
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img id="navbar-logo" src="/images/Logo.png" alt="Logo">
            </a>

            <span class="navbar-burger burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>

        <div id="navbarMenu" class="navbar-menu">

            <div class="navbar-end">
                {{-- pages with content from db --}}
                <a href="/home" class="@if(Route::is('pages.home')) is-active @endif navbar-item">Home</a>
                <a href="/news" class="@if(Route::is('news')) is-active @endif navbar-item">News</a>
                <a href="/projects" class="@if(Route::is('projects.index')) is-active @endif navbar-item">Projects</a>
                <a href="/services" class="@if(Route::is('pages.services')) is-active @endif navbar-item">Services</a>
                <a href="/about" class="@if(Route::is('pages.about')) is-active @endif navbar-item">About</a>
            </div>
            

            {{-- conditional Login and register buttons OR account dropdown menu --}}
            @guest
            <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>

            @if (Route::has('register'))

            <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>

            @endif
            @else
            <div class="navbar-item has-dropdown is-hoverable">
                <a id="navbarDropdown" class="navbar-link" href="#">
                    {{ Auth::user()->name }}
                </a>

                <div class="navbar-dropdown" aria-labelledby="navbarDropdown">
                    <a class="navbar-item" href="{{ url('/dashboard') }}">Dashboard</a>
                    <a class="navbar-item" href="">Profile</a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest

        </div>
    </div>
    </div>
</nav>
                    
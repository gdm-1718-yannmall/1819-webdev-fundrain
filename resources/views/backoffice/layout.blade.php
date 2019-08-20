@include('backoffice/partials.header')
  <div class="wrapper">
    <div class="columns">      
      @include('backoffice/partials.sidenav')
      <main class="column main">
          @yield('content')
        </main>
    </div>
  </div>
@include('backoffice/partials.footer')
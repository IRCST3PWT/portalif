<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  {{-- <div class="container"> --}}
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
          @if (Auth::guest())
              <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              </ul>
          @else
              <div class="navbar-nav dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                      <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </div>
              </div>
          @endif
      </ul>
    </div>
  {{-- </div> --}} 
</nav>
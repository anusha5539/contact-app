<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title','Contact App')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    @yield('styles')
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="{{url('/')}}">            
            <strong>Contact</strong> App
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            
        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-toggler">
        @auth
          <ul class="navbar-nav">
            <li>{{request()->is('companies*')}}</li>
            <li class="nav-item {{request()->is('company*') ? 'active' : ''}} "><a href="{{route('company.index')}}" class="nav-link text-dark">Company</a></li>
            <li class="nav-item {{request()->is('contacts*') ? 'active' : ''}}"><a href="{{route('contacts.index')}}" class="nav-link text-dark">Contacts</a></li>
          </ul>
          @endauth
          <ul class="navbar-nav ml-auto">
            @guest
              <li class="nav-item mr-2"><a href="{{route('login')}}" class="btn btn-outline-secondary">Login</a></li>
              <li class="nav-item"><a href="{{route('register')}}" class="btn btn-outline-primary">Register</a></li>
            @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->fullName()}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('settings.profile.edit')}}">Settings</a>
                   <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>
              @endguest
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
             
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
   @yield('script')
  </body>
</html>
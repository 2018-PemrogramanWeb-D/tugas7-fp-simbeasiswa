<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{asset('assetcss/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetcss/css/style.css')}}" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">SIM Beasiswa</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Beasiswa
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="/alumni">Alumni ITS</a>
                <a class="dropdown-item" href="/institusi">Institusi</a>
                <a class="dropdown-item" href="/non-institusi">Non Institusi</a>
                <a class="dropdown-item" href="/pasca-sarjana">Pasca Sarjana</a>
                <a class="dropdown-item" href="/luar-negeri">Luar Negeri</a>
              </div>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url ('/contact')}}">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                @if(Auth::guest())
                  <a class="dropdown-item" href="/login">Login Admin</a>
                @else
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  <a class="dropdown-item" href="/viewmessage">View Message</a>
                  <a class="dropdown-item" href="{{url ('/sisteminformasi')}}">Sistem Informasi</a>
                @endif
                <a class="dropdown-item" href="{{url ('/upload')}}">Upload</a>
              </div>
            </li>
             </li>
            <form class="form-inline" action="{{url('/search')}}" method="POST">
                {{csrf_field()}}
                <input class="form-control mr-sm-2" type="text" placeholder="Search" name="kata">
                <button class="btn btn-success" type="submit">Cari</button>
            </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <div class="container">
        @yield('content')
    </div>
    <footer class="py-3">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; SIM Beasiswa 2018</p>
        </div>
    </footer>
    <script src="{{asset('assetcss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assetcss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </body>

</html>

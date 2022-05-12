<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lonedry</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/c3c1353c4c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background-color: #F0F0F0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        a:hover {
            text-decoration: none;
            color: inherit;
            transition: inherit;
        }
        .nav {
            font-size: 18px;
            transition: color .15s;
        }
        .nav:hover {
            color: #F2E03F;
        }
        ul > li {
            margin-left: 5px;
            margin-right: 5px;
            font-size: 18px;
        }
        .footer {
            margin-top: auto;
        }
    @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu{ display: none; }
            .navbar .nav-item:hover .nav-link{   }
            .navbar .nav-item:hover .dropdown-menu{ display: block; }
            .navbar .nav-item .dropdown-menu{ margin-top:0; }
        }
    @yiegitld('css');
    @yield('css');
    </style>
</head>
<body>
    <!-- START NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container container-fluid">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('images/lonedry_black.png') }}" alt="Logo I'm Okay!" height=50>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar Kiri -->
                <ul class="navbar-nav me-auto text-center px-5 h5">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="{{ url('/services') }}" id="navbarDropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/services') }}">Cuci + Setrika</a></li>
                            <li><a class="dropdown-item" href="{{ url('/services') }}">Setrika</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ url('/services') }}">Riwayat Transaksi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                </ul>

                <!-- Navbar Kanan -->
                @guest
                <!-- Kalau belum log in -->
                @if (Route::has('login'))
                <div class="btn btn-primary">
                    <a class="nav" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
                @endif

                @else
                <!-- Kalau sudah log in -->
                <div class="navbar-collapse; float:right" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto text-center px-5 h5">
                        <li class="nav-item dropdown">
                            <a class="nav" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                {{ Auth::user()->name }}<i class="fa fa-user-circle mx-2" style="font-size: 25px;"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                @if(Auth::user()->is_Admin == 0)
                                <li><a class="dropdown-item" href="/profile/edit/{{ Auth::user()->id}}">Profile</a></li><li>
                                @endif
                                @if(Auth::user()->is_Admin == 1)
                                <li><a class="dropdown-item" href="{{ url('/home/admin') }}">Dashboard</a></li>
                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>

    <!-- START FOOTER -->
    <footer class="footer text-center text-lg-start bg-light">
        <div class="container text-md-start mt-5">
            <div class="row mt-3">
                <!-- Logo -->
                <div class="col-8 mx-auto mb-4">
                    <img src="{{ asset('images/lonedry_black.png') }}" alt="Lonedry" width=200>
                </div>
                <!-- Kolom kanan 1 -->
                <div class="col-2 mx-auto mb-4">
                    <p class="h6 text-uppercase fw-bold mb-4">
                        <a class="nav">Help & Support</a>
                    </p>
                    <p class="h6 mb-4">
                        <a href="#!" class="nav">Cara Penggunaan</a>
                    </p>
                    </div>
                    <!-- Kolom kanan 2 -->
                    <div class="col-2 mx-auto mb-4">
                    <p class="h6 text-uppercase fw-bold mb-4">
                        <a class="nav">About Us</a>
                    </p>
                    <p>
                        <a href="#" class="nav">Tentang Kami</a>
                    </p>
                    <p>
                        <a href="#" class="nav">Kontak Kami</a>
                    </p>
                </div>
                <!-- Footer bawah -->
                <section class="container d-flex justify-content-center justify-content-lg-between p-4 border-bottom text-dark">
                    <!-- Copyright -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Hak Cipta © 2022 Lonedry</span>
                    </div>
                    <!-- Social media -->
                    <div>
                        <span class="me-4">Follow us on</span>
                        <a href="#" class="me-4">
                        <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="me-4">
                        <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        // make it as accordion for smaller screens
        if (window.innerWidth > 992) {
            document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
                everyitem.addEventListener('mouseover', function(e){
                    let el_link = this.querySelector('a[data-bs-toggle]');
                    if(el_link != null){
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.add('show');
                        nextEl.classList.add('show');
                    }
                });
                everyitem.addEventListener('mouseleave', function(e){
                    let el_link = this.querySelector('a[data-bs-toggle]');
                    if(el_link != null){
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.remove('show');
                        nextEl.classList.remove('show');
                    }
                })
            });
        }
    });
</script>

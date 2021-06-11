<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
</head>

<body>
    <!--Main Navigation-->
    <header>
        {{-- <script>
            const searchButton = document.getElementById('search-button');
            const searchInput = document.getElementById('search-input');
            searchButton.addEventListener('click', () => {
                const inputValue = searchInput.value;
                alert(inputValue);
            });

        </script> --}}





        {{-- <style>
          /* Carousel styling */
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 100vh;
          }

          .carousel-item:nth-child(1) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
          }
          .carousel-item:nth-child(2) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
          }
          .carousel-item:nth-child(3) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
          }

          /* Height for devices larger than 576px */
          @media (min-width: 992px) {
            #introCarousel {
              margin-top: -58.59px;
            }
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
              height: 50vh;
            }
          }

          .navbar .nav-link {
            color: #fff !important;
          }
        </style> --}}

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block fixed-top"
            style="z-index: 2000; background-color: #2f31338a;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                    <strong>MarkPress</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#palestras" rel="nofollow">Palestras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#final">Contatos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item me-3 me-lg-0">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" style="background-color: #F0F8FF;" class="form-control rounded"
                                        placeholder="Pesquisar..." aria-label="Search"
                                        aria-describedby="search-addon" />
                                </div>
                                <button id="search-button" type="button" class="btn btn-primary me-5">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </li>
                        <!-- login/cadastrar -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-3 me-lg-0">
                                    <div class="d-flex align-items-center">

                                        <a class="btn btn-dark px-3 me-2" href="{{ route('login') }}" ">
                                            {{ __('Login') }}
                                        </a>

                                        <form id="login-form" action="{{ route('login') }}" method="POST" class="d-none">
                                            @csrf
                                            <button type="submit" class="btn btn-primary me-5">
                                                Cadastrar
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endif
                        @else
                            <!-- Avatar -->
                            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="40"
                                    alt="" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Meu perfil</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">configuração</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @endguest
                    </ul>



                    {{-- <!-- Avatar -->
                <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                >
                <img
                    src="/img/icon3.svg"
                    class="rounded-circle"
                    height="40"
                    alt=""
                    loading="lazy"
                />
                </a>
                <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
                <li>
                    <a class="dropdown-item" href="#">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Logout</a>
                </li> --}}



                    {{-- <div class="d-flex align-items-center">
                <button type="button" class="btn btn-dark px-3 me-2">
                  Login
                </button>
                <button type="button" class="btn btn-primary me-5">
                  Sign up for free
                </button>
              </div> --}}



                    {{-- <!-- Avatar -->
              <a
              class="dropdown-toggle d-flex align-items-center hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
              >
              <img
                  src="/img/icon3.svg"
                  class="rounded-circle"
                  height="40"
                  alt=""
                  loading="lazy"
              />
              </a>
              <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
              >
              <li>
                  <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                  <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                  <a class="dropdown-item" href="#">Logout</a>
              </li> --}}

                </div>
            </div>
        </nav>
        <!-- Navbar -->


    </header>
    @yield('content')
</body>

</html>

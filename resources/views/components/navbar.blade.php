<section>
    <!--Main Navigation-->
    <!-- Navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block fixed-top" style="z-index: 2000; background-color: #2f31338a;"> --}}
    <nav class="navbar navbar-expand-lg navbar-dark d-lg-block fixed-top"
        style="z-index: 2000; background-color: #2f31338a;">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand nav-link" href="{{ route('Home') }}">
                <strong>MarkPress</strong>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
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
                            <div class="form-outline me-5">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="search" name="search" style="background-color: #F0F8FF;" class="form-control rounded" placeholder="Pesquisar..." aria-label="Search" aria-describedby="search-addon" required/>
                                </form>
                            </div>
                        </div>
                    </li>
                    <!-- login/cadastrar -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item me-3 me-lg-0">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-dark px-3 me-2" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                    {{-- <form id="login-form" action="{{ route('login') }}" method="POST" class="d-none">
                                      @csrf
                                      <button type="button" class="btn btn-primary me-5">
                                          Cadastrar
                                      </button>
                                    </form> --}}
                                </div>
                            </li>
                        @endif
                    @endguest
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
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</section>

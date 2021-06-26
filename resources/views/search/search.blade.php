@extends('layouts.search')





{{-- INICIO DA SEÇÃO DA NAVBAR --}}

@section('navbar')

    @include('components.navbar_no_search')

@endsection

{{-- FIM DA SEÇÃO DA NAVBAR --}}





{{-- INICIO DA SEÇÃO DA BANNER --}}

@section('inicio')

    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner-J,
        .carousel-item-J,
        .carousel-item-J.active {
            height: 100vh;
        }

        .carousel-item-J {
            background-image: url('img/background/bc.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* .carousel-item-J:nth-child(2) {
                                background-image: url('img/background/bc.jpg');
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center center;
                            }
                            .carousel-item-J:nth-child(3) {
                                background-image: url('img/background/bc.jpg');
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center center;
                            } */

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }

            #introCarousel,
            .carousel-inner-J,
            .carousel-item-J,
            .carousel-item-J.active {
                height: 50vh;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }

    </style>


    <!-- Carousel wrapper -->
    <section id=inicio>
        <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
            <!-- Indicators -->

            <ol class="carousel-indicators">

                @forelse ($events as $event)
                    @if ($loop->first)
                        <li data-mdb-target="#introCarousel" data-mdb-slide-to="{{ $loop->index }}" class="active"></li>
                    @elseif ($loop->index == 6)
                    @break
                @else
                    <li data-mdb-target="#introCarousel" data-mdb-slide-to="{{ $loop->index }}"></li>
                @endif
                @empty
                    <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                    @endforelse

                </ol>

                <!-- Inner -->
                <div class="carousel-inner carousel-inner-J">
                    <!-- Single item -->

                    @forelse ($events as $event)
                        @if ($loop->first)
                            <div class="carousel-item active carousel-item-J">
                                <div class="mask" style="background: rgba(0, 0, 0, 0.0);">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <div class="text-white text-center">
                                            <h2>{{ $event->name }}</h2>
                                            <a class="btn btn-outline-light btn-lg m-2" href="/lecture/{{$event->id}}"
                                                role="button">Mais Informações</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($loop->index == 6)
                        @break
                    @else
                        <div class="carousel-item carousel-item-J">
                            <div class="mask" style="background: rgba(0, 0, 0, 0.0);">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <div class="text-white text-center">
                                        <h2>{{ $event->name }}</h2>
                                        <a class="btn btn-outline-light btn-lg m-2" href="/lecture/{{$event->id}}"
                                            role="button">Mais Informações</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @empty
                        <div class="carousel-item active carousel-item-J">
                            <div class="mask" style="background: rgba(0, 0, 0, 0.0);">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <div class="text-white text-center">
                                        <h2>Bem-vindo ao</h2>
                                        <h1>MarkPres</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforelse

                    </div>
                    <!-- Inner -->

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Carousel wrapper -->
            </section>
            <!--Section: Content-->

        @endsection

        {{-- FIM DA SEÇÃO DO BANNER --}}



        @section('search')

            <!--Main Navigation-->

            <!--Main layout-->
            <main class="mt-5">
                <div class="container">
                    <!--Section: Content-->
                    <section>
                        <div class="row">
                            <form action="{{ route('search') }}" method="GET" class="form-inline justify-content-center"
                                style="text-align: center;">
                                <input class="form-control mr-sm-2 my-2 form-control form-control-lg" type="text"
                                    placeholder="Search" aria-label="Search" name="search" required />
                                <button class="btn btn-primary btn-lg my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </section>
                    <!--Section: Content-->

                    <hr class="my-5" />

                    <!--Main layout-->

                @endsection


                {{-- INICIO DA SEÇÃO PALESTRA --}}

                @section('result')

                    <!--Section: Content-->
                    <section class="text-center" id=result>
                        <h4 class="mb-5"><strong>Palestras</strong></h4>

                        <div class="row">

                            @forelse ($posts as $post)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <img src="/img/icon.png" class="img-fluid" />
                                            <a href="/lecture/{{$event->id}}">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->name }}</h5>
                                            <p class="card-text">
                                                Descrição
                                            </p>
                                            <a href="/lecture/{{$event->id}}" class="btn btn-primary">Participar</a>
                                        </div>
                                    </div>
                                </div>
                                @if (($loop->index + 1) % 3 == 0)
                                    @if ($loop->first)

                                    @else
                                        <hr class="my-5" />
                                    @endif
                                @endif
                            @empty
                                <h1>Nehuma palestra encontrada com o nome {{ $result }}</h1>
                            @endforelse
                    </section>
                    <!--Section: Content-->
                </div>
            </main>


        @endsection









        {{-- INICIO DA SEÇÃO DA NAVBAR --}}

    @section('footer')

        @include('components.footer')

    @endsection

    {{-- FIM DA SEÇÃO DA NAVBAR --}}
































    {{-- <form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
</form>

@if ($posts->isNotEmpty())
    @foreach ($posts as $post)
        <div>
            <p>{{ $post->name }}</p>
        </div>
    @endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif --}}

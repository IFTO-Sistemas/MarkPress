@extends('layouts.main')





{{-- INICIO DA SEÇÃO DA NAVBAR --}}

@section('navbar')

    @include('components.navbar')

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




        {{-- INICIO DA SEÇÃO PALESTRA --}}

        @section('palestra')

            <!--Main Navigation-->

            <!--Main layout-->
            <main class="mt-5">
                <div class="container">
                    <!--Section: Content-->
                    <section>
                        <div class="row">
                            <div class="col-md-6 gx-5 mb-4">
                                <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                                    <img src="https://www.moblee.com.br/blog/wp-content/uploads/sites/2/2019/04/porque-acompanhar-uma-palestra-de-encantamento-em-eventos1.png"
                                        class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 gx-5 mb-4">
                                <h4><strong>Facilis consequatur eligendi</strong></h4>
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                                    eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                                    sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                                </p>
                                <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                                    nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                                    alias, unde optio accusantium soluta, iusto molestiae adipisci et?
                                </p>
                            </div>
                        </div>
                    </section>
                    <!--Section: Content-->

                    <hr class="my-5" />

                    {{-- <!--Section: Content-->
                    <section class="text-center" id=palestras>
                        <h4 class="mb-5"><strong>Palestras Próximas</strong></h4>
                        <!-- Carousel wrapper -->
                        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center"
                            data-mdb-ride="carousel">
                            <!-- Controls -->
                            <div class="d-flex justify-content-center mb-4">
                                <button class="carousel-control-prev position-relative" type="button"
                                    data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next position-relative" type="button"
                                    data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <!-- Inner -->
                            <div class="carousel-inner py-4">
                                <!-- Single item -->
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/181.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 d-none d-lg-block">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/182.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 d-none d-lg-block">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/183.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 d-none d-lg-block">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/185.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 d-none d-lg-block">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/186.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/187.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/188.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                                <div class="card">
                                                    <img src="https://mdbootstrap.com/img/new/standard/nature/189.jpg"
                                                        class="card-img-top" alt="..." />
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk
                                                            of the card's content.
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Participar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Inner -->
                        </div>
                        <!-- Carousel wrapper -->
                    </section>
                    <!--Section: Content-->

                    <hr class="my-5" /> --}}

                    <!--Section: Content-->
                    <section class="text-center" id=palestras>
                        <h4 class="mb-5"><strong>Palestras</strong></h4>

                        <div class="row">

                            @forelse ($events as $event)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <img src="/img/icon.png" class="img-fluid" />
                                            <a href="/lecture/{{$event->id}}">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $event->name }}</h5>
                                            <p class="card-text">
                                                Descrição
                                            </p>
                                            <a href="/lecture/{{$event->id}}" class="btn btn-primary">Participar</a>
                                        </div>
                                    </div>
                                </div>
                                @if (($loop->index + 1) % 3 == 0)
                                    @if ($loop->first)

                                    @elseif ($loop->last)
                                        @break
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
            <!--Main layout-->

        @endsection





        {{-- INICIO DA SEÇÃO DA NAVBAR --}}

    @section('footer')

        @include('components.footer')

    @endsection

    {{-- FIM DA SEÇÃO DA NAVBAR --}}

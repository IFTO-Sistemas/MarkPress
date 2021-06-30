@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ url('../css/meuseventos.css') }}" />
    </head>

    {{-- Status do evento --}}
    <section id=inicio>
        <header>
            <div class="p-5 text-center bg-image" style="  
                                        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
                                        height: 300px;">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.452);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white text-center">
                            <h1 class="mb-3">Meus eventos</h1>
                            <a class="btn btn-primary btn-lg m-2" href="meuseventos" role="button" rel="nofollow"
                                target="_blank" style="background-color: #1AA7B5">Ativos</a>
                            <a class="btn btn-primary btn-lg m-2" href="meuseventosencerrados" target="_blank" role="button"
                                style="background-color: #1AA7B5">Encerrados</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>


    {{-- Listagem de eventos ativos --}}
    <main class="mt-5">
        <div class="container">
            <section class="text-center" id=eventos>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do evento - 04</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;25/06/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;13:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Online</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <a class="btn btn-warning" data-mdb-toggle="modal" href="#exampleModalToggle1" role="button"
                                    style="margin-top: 15px; background-color: #1AA7B5"><i class="fa fa-check-circle"
                                        aria-hidden="true"></i>&nbsp;Presença validada</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do evento - 05</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;12/06/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;21:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Online</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <a class="btn btn-warning" data-mdb-toggle="modal" href="#exampleModalToggle1" role="button"
                                    style="margin-top: 15px; background-color: #4f4f4f"><i class="fa fa-check-circle"
                                        aria-hidden="true"></i>&nbsp;Presença não validada</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do evento - 06</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;05/06/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;17:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Oline</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <a class="btn btn-warning" data-mdb-toggle="modal" href="#exampleModalToggle1" role="button"
                                    style="margin-top: 15px; background-color: #1AA7B5"><i class="fa fa-check-circle"
                                        aria-hidden="true"></i>&nbsp;Presença validada</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
   

    <!--Footer-->
    <section id="final">
        <footer class="bg-light text-lg-start">

            <hr class="m-0" />

            <div class="text-center py-4 align-items-center">
                <p>Follow MDB on social media</p>
                <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button"
                    rel="nofollow" target="_blank" style="background-color: #1AA7B5">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                    target="_blank" style="background-color: #1AA7B5">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                    target="_blank" style="background-color: #1AA7B5">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow"
                    target="_blank" style="background-color: #1AA7B5">
                    <i class="fab fa-github"></i>
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-dark" target="_blank" href="https://jeftelg.dev/">MarkPres</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!--Footer-->
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>

@endsection

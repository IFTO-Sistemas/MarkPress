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
                                <h5 class="card-title">Nome do evento - 01</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;10/07/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;13:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Oline</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <a class="btn btn-warning" data-mdb-toggle="modal" href="#exampleModalToggle1" role="button"
                                    style="margin-top: 15px; background-color: #1AA7B5"><i class="fa fa-check-circle"
                                        aria-hidden="true"></i>&nbsp;Validar presença</a>
                                <a class="btn btn-primary" data-mdb-toggle="modal" href="#exampleModalcancelar1"
                                    role="button" style="margin-top: 15px; background-color: #4F4F4F"><i
                                        class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Cancelar Inscrição</a>
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
                                <h5 class="card-title">Nome do evento - 02</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;02/07/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;20:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Oline</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <div>
                                    <a class="btn btn-warning" data-mdb-toggle="modal" href="#exampleModalToggle1"
                                        role="button" style="margin-top: 15px; background-color: #1AA7B5"><i
                                            class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Validar presença</a>
                                    <a class="btn btn-primary" data-mdb-toggle="modal" href="#exampleModalcancelar1"
                                        role="button" style="margin-top: 15px; background-color: #4F4F4F"><i
                                            class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Cancelar Inscrição</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color:  rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do evento - 03</h5>
                                <div class="col-md-6 info-evento" style="text-align:left">
                                    <p class="card-text fa fa-calendar">&nbsp;04/07/2021</p>&nbsp;
                                    <p class="card-text fa fa-clock">&nbsp;19:00</p><br>
                                    <p class="card-text fa fa-map-marker">&nbsp;Evento Oline</p><br>
                                    <a href="#!" class="card-text fa fa-link">&nbsp;Clique aqui para acessar</a>
                                    <br>
                                </div>
                                <a class="btn btn-warning" data-mdb-toggle="modal" href="#exampleModalToggle1" role="button"
                                    style="margin-top: 15px; background-color: #1AA7B5"><i class="fa fa-check-circle"
                                        aria-hidden="true"></i>&nbsp;Validar presença</a>
                                <a class="btn btn-primary" data-mdb-toggle="modal" href="#exampleModalcancelar1"
                                    role="button" style="margin-top: 15px; background-color: #4F4F4F"><i
                                        class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Cancelar Inscrição</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    {{-- Listagem de eventos encerrados
                <section class="text-left" id="meuseventosencerrados">
                    <main>
                        <div class="container column">
                            <div class="card flex-row flex-wrap">
                                <div class="card-header border-0">
                                    <img src="data:image/jpeg;base64,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"
                                        alt="">
                                </div>

                                <div class="card-block px-5">
                                    <h4 class="card-title">Informática básica</h4>
                                    <p class="card-text fa fa-calendar"> dia 15 de julho de 2021</p>
                                    <p class="card-text">Live no Facebook as 21h</p>
                                    <p class="card-text">Link de acesso: https://instagram.com</p>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-info" type="button" data-toggle="modal"
                                        data-target="#cancelarpresenca">
                                        <i class="fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                       Cancelar inscrição
                                    </button>
                                </div>

                            </div>
                        </div>
                    </main>
                </section> --}}

    <!-- First modal validar dialog -->
    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel1">Área destinada a aferição de presenças!</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" class="form-control" id="validarpresenca" style="background-color: #F0F8FF;"
                            placeholder="Digite ou cole o código de validação aqui.">
                    </form>
                </div>
                <div class="modal-footer">
                    <small> Atenção! Se o código digitado estiver fora do prazo nada será validado.</small>
                    <button class="btn btn-warning" data-mdb-target="#exampleModalToggle22" data-mdb-toggle="modal"
                        data-mdb-dismiss="modal" style="background-color: #1AA7B5">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        Validar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Second modal validar dialog -->
    <div class="modal fade" id="exampleModalToggle22" aria-hidden="true" aria-labelledby="exampleModalToggleLabel22"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel22">Sua presença foi validada com sucesso!</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-mdb-dismiss="modal" data-dismiss="modal"
                        aria-label="Close" style="background-color: #4F4F4F">
                        <i class="fa fa-times-circle">&nbsp;</i>Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>




    <!-- First modal cancelar dialog -->
    <div class="modal fade" id="exampleModalcancelar1" aria-hidden="true" aria-labelledby="exampleModalcancelarLabel1"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalcancelarLabel1">Você deseja realmente cancelar sua inscrição?
                    </h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" data-mdb-target="#exampleModalcancelar22" data-mdb-toggle="modal"
                        data-mdb-dismiss="modal" style="background-color: #1AA7B5">
                        <i class="fa fa-check-circle" aria-hidden="true""></i>
                            Sim
                        </button>
                        <button type=" button" class="btn btn-info" data-mdb-dismiss="modal" data-dismiss="modal"
                            aria-label="Close" style="background-color: #4F4F4F">
                            <i class="fa fa-times-circle">&nbsp;</i>Não
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Second modal cancelar dialog -->
    <div class="modal fade" id="exampleModalcancelar22" aria-hidden="true" aria-labelledby="exampleModalcancelarLabel22"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalcancelarLabel22">Sua inscrição foi cancelada com sucesso!</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-mdb-dismiss="modal" data-dismiss="modal"
                        aria-label="Close" style="background-color: #4F4F4F">
                        <i class="fa fa-times-circle">&nbsp;</i>Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>



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

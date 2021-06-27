<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<main class="mt-5">
    <div class="container">
        <div class="panels-container">
            <img src="img/logo.svg" class="image" alt="">

            <section>
                <div style="background-color:#4f4f4f;">
                    <h1 class="text-left text-white p-3"><b>Meus <p> eventos</b></h1>
                    <nav class="navSecondary">
                        <a href="#!" class="btn btn-secondary btn-lg" role="button" aria-pressed="true">Ativos</a>
                        <a href="#!" class="btn btn-secondary btn-lg" role="button" aria-pressed="true">Encerrados</a>
                    </nav>
                </div>
            </section>
            <hr class="my-5" />

            <section class="text-left" id="meuseventosativos">
                <main>
                    <div class="container column">
                        <div class="card flex-row flex-wrap">
                            <div class="card-header border-0">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>

                            <div class="card-block px-5">
                                <h4 class="card-title">Nome do evento</h4>
                                <p class="card-text fa fa-calendar"> dia tal do mês tal de 2021</p>
                                <p class="card-text">Local: Google Meet</p>
                                <p class="card-text">Link de acesso: https://meet.google.etc..</p>
                            </div>

                            <div class="form-group">
                                <button href="#!" class="btn btn-warning" type="button" data-toggle="modal" data-target="#validarpresenca">
                                    <i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>
                                    Validar presença
                                </button>

                                <div>
                                    <button class="btn btn-info" type="button" data-toggle="modal" data-target="#cancelarpresenca">
                                        <i class="fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                        Cancelar presença
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="container column">
                        <div class="card flex-row flex-wrap">
                            <div class="card-header border-0">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>

                            <div class="card-block px-5">
                                <h4 class="card-title">Nome do evento</h4>
                                <p class="card-text fa fa-calendar"> dia tal do mês tal de 2021</p>
                                <p class="card-text">Local: Google Meet</p>
                                <p class="card-text">Link de acesso: https://meet.google.etc..</p>
                            </div>

                            <div class="form-group">
                                <button href="#!" class="btn btn-warning" type="button" data-toggle="modal" data-target="#validarpresenca">
                                    <i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>
                                    Validar presença
                                </button>

                                <div>
                                    <button class="btn btn-info" type="button" data-toggle="modal" data-target="#cancelarpresenca">
                                        <i class="fa fa-times-circle" aria-hidden="true">&nbsp;</i>
                                        Cancelar presença
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </section>



            <!-- Modal validar presença-->
            <div class="modal fade" id="validarpresenca" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="validacao">Área destinada a aferição de presenças!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div>
                            <input type="text" class="inputtext" id="validarpresenca" name="email" style="background-color: #F0F8FF;" placeholder="Digite ou cole o código de validação aqui.">

                        </div>

                        <div class="modal-footer">
                            <div class="modal-body">
                                <small> Atenção! Se o código digitado estiver fora do prazo nada será validado.</small>

                                <div>
                                    <button id="validarcodigo" type="button" class="btn btn-warning">
                                        <i class="fa fa-check-circle">&nbsp;</i>Validar
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal cancelar presença-->
            <div class="modal fade" id="cancelarpresenca" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-footer">
                            <h5 class="cancelamento">Você realmente deseja cancelar esta inscrição?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <div class="modal-body">
                                <button id="validarcodigo" type="button" class="btn btn-warning">
                                    <i class="fa fa-check-circle">&nbsp;</i>Sim
                                </button>
                                <button id="validarcodigo" type="button" class="btn btn-info">
                                    <i class="fa fa-times-circle">&nbsp;</i>Não
                                </button>
                            </div>

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
                        <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
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

            <?php $__env->stopSection(); ?>

            <?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/public/MarkPress/resources/views/welcome.blade.php ENDPATH**/ ?>
@extends('layouts.form')











@section('init')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

    <main>
        <div class="container py-4">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                    <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one
                        in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it
                        to your liking.</p>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        Data: 20/02/2021 - 19:30
                    </div>
                    <div class="col-md-auto">
                        Webex Meet
                    </div>
                    <div class="col-md-auto">
                        Palestrante: Xunior Gaymi P.
                    </div>
                    <div class="col-md-auto">
                        Contato: email@gmail.com
                    </div>
                </div>
            </footer>

            <hr class="my-2" />

            <div class="mb-4 rounded-3">
                <div class="container-fluid py-2">

                    <div class="row justify-content-md-center">
                        <div class=" display-5 fw-bold col-md-auto">
                            <h1>Preencha o formulario para Participar da Palestra</h1>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <label class="sr-only" for="inlineFormInputGroup">CPF</label>
                            <div class="input-group mb-2 py-2">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="CPF"
                                    required />
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <label class="sr-only" for="inlineFormInputGroup">Celular</label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Celular"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center my-3">
                        <div class="col-md-auto">
                            <button type="submit" class="btn btn-primary mb-2">Participar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection









{{-- INICIO DA SEÇÃO DA NAVBAR --}}

@section('footer')

    @include('components.footer')

@endsection

{{-- FIM DA SEÇÃO DA NAVBAR --}}

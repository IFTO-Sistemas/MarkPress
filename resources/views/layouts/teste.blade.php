<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Abrir modal
</button>

<!-- Modal -->
<div class="modal fade" data-backdrop="static" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <button href="#!" class="btn btn-warning" type="button" data-toggle="modal"
        data-target="#validar">
        <i class="fa fa-check-circle" aria-hidden="true">&nbsp;</i>
        Validar presença
    </button>
    <button class="btn btn-info" type="button" data-toggle="modal" data-target="#cancelar">
        <i class="fa fa-times-circle" aria-hidden="true">&nbsp;</i>
        Cancelar presença
    </button>

    <!-- Modal -->
    <div class="modal fade" data-backdrop="static" id="validar" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="validacao" id="exampleModalLabel">Área destinada a aferição de
                        presenças!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" style="background-color: #F0F8FF;"
                            placeholder="Digite ou cole o código de validação aqui."
                            aria-label="Search" aria-describedby="search-addon">
                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 0px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </div>
                    <button id="search-button" type="button" class="btn btn-primary me-5">
                        <i class="fa fa-check-circle">&nbsp;</i>Validar
                    </button>
                </div>
                <div class="modal-footer">
                    <div class="modal-body">
                        Atenção! Se o código digitado estiver fora do prazo nada será validado.
                    </div>
                </div>
            </div>
        </div>
    </div>
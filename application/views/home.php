<div class="container">

        <div class="modal fade" tabindex="-1" role="dialog" id="my_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastra</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Texto do corpo do modal, é aqui.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Cancelar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="card mt-2 border-0 ">
            <div class="row p-2">
                <div class="col-md"><button class="btn btn-primary" data-toggle="modal" data-target="#my_modal"><i class="fas fa-plus"></i> Adicionar</button></div>
                <div class="col-md"><input type="text" placeholder="Pesquisar..." class="form-control input_pesquisar"></div>
            </div>
            <div class="text-dark bg-light card-body mt-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>senha</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>

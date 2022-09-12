<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAgregarTablero" data-whatever="@mdo">Crear Nuevo Grupo</button>


<div class="modal fade" id="modalAgregarTablero" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grupos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="AjaxFrmRegistrarGrupo" method="POST">
                    <div class="form-group">
                        <label for="txt_nombre_grupo" class="col-form-label">Nombre del Grupo:</label>
                        <input type="text" class="form-control" id="txt_nombre_grupo" autocomplete="off" name="txt_nombre_grupo" placeholder="Nombre del Tablero">
                    </div>

                    <div>
                        <button type="button" id="btn-crear-grupo" name="btn-crear-grupo" class="btn btn-primary">Registrar Grupo</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
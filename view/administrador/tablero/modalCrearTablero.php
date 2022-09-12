<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAgregarTablero" data-whatever="@mdo">Crear Nuevo Tablero</button>


<div class="modal fade" id="modalAgregarTablero" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tablero</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="AjaxFrmRegistrarTablero" method="POST">
                    <div class="form-group">
                        <label for="txt_nombre_tablero" class="col-form-label">Nombre del Tablero:</label>
                        <input type="text" class="form-control" id="txt_nombre_tablero" name="txt_nombre_tablero" autocomplete="off" placeholder="Nombre del Tablero">
                    </div>
                    <div class="form-group">
                        <label for="txt_url_tablero" class="col-form-label">URL del Tablero:</label>
                        <textarea class="form-control" id="txt_url_tablero" rows="6"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" id="btn-registrar-tablero" name="btn-registrar-tabler" value="Registrar Tablero">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
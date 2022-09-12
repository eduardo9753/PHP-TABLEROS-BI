<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalEditarGrupo_<?php echo $data->id_grupo ?>" data-whatever="@mdo"><i class='bx bxs-edit-alt bx-tada'></i></button>


<div class="modal fade" id="modalEditarGrupo_<?php echo $data->id_grupo ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="actualizarGrupo" id="AjaxFrmEditarGrupo" method="POST">
                    <div class="form-group">
                        <label for="txt_nombre_grupo" class="col-form-label">Nombre del Grupo:</label>
                        <input type="text" value="<?php echo $data->id_grupo; ?>" name="txt_id_usuario" id="txt_id_usuario" hidden>
                        <input type="text" class="form-control" value="<?php echo $data->nombre_grupo; ?>" autocomplete="off" id="txt_nombre_grupo" name="txt_nombre_grupo" placeholder="Nombre del Tablero">
                    </div>

                    <div>
                        <input type="submit" id="btn-editar-grupo" name="btn-editar-grupo" class="btn btn-primary" value="Actualizar Grupo">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
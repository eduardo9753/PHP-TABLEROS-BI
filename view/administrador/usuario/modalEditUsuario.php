<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalEditUsuario<?php echo $data->id_usuario ?>" data-whatever="@mdo"><i class='bx bx-edit-alt bx-tada'></i></button>


<div class="modal fade" id="modalEditUsuario<?php echo $data->id_usuario ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="AjaxFrmEditarUsuario" method="POST">
                    <div class="form-group">
                        <label for="txt_nombre_grupo" class="col-form-label">Nombre del Usuario:</label>
                        <input type="text" class="form-control" value="<?php echo $data->nombre_usuario ?>" autocomplete="off" id="txt_nombre_usuario" name="txt_nombre_usuario" placeholder="Nombre Usuario">
                    </div>

                    <div class="form-group">
                        <label for="txt_nombre_grupo" class="col-form-label">Contraseña:</label>
                        <input type="text" class="form-control" value="<?php echo $data->contra_usuario ?>" id="txt_nombre_pass" name="txt_nombre_pass" placeholder="**************">
                    </div>
                    <div>
                        <input type="submit" id="btn-editar-usuario" name="btn-editar-usuario" class="btn btn-primary" value="Editar Datos">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
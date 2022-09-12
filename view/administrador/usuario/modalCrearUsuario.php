<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAgregarUsuario" data-whatever="@mdo">Crear Nuevo Usuario</button>


<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tablero</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="AjaxFrmRegistrarUsuario" method="POST">
                    <div class="form-group">
                        <label for="txt_nombre_grupo" class="col-form-label">Nombre del Usuario:</label>
                        <input type="text" class="form-control" id="txt_nombre_usuario" name="txt_nombre_usuario" autocomplete="off" placeholder="Nombre Usuario">
                    </div>

                    <div class="form-group">
                        <label for="txt_nombre_grupo" class="col-form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="txt_nombre_pass" name="txt_nombre_pass" placeholder="**************">
                    </div>

                    <div class="form-group">
                        <label for="txt_nombre_grupo" class="col-form-label">Nombre del Perfil:</label>
                        <select name="cbo_perfil" id="cbo_perfil" class="form-select">
                            <?php foreach ($dataPerfil as $data) : ?>
                                <option value="<?php echo $data->id_perfil ?>"><?php echo $data->nombre_perfil ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <input type="submit" id="btn-crear-usuario" name="btn-crear-usuario" class="btn btn-primary" value="Registrar Usuario">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
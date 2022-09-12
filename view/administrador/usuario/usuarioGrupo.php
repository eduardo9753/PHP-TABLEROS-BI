<?php include_once('view/templates/head.php'); ?>

<?php include_once('view/templates/navAdmin.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $titulo ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <?php include_once('view/administrador/tablero/modalCrearTablero.php'); ?>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" id="AjaxFrmRegistrarUsuarioGrupo" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Nombre del Usuario</label>
                                            <input type="text" class="" value="<?php echo $dataUsuario->id_usuario; ?>" name="txt_id_usuario" id="txt_id_usuario" hidden>
                                            <input type="text" class="form-control" id="" value="<?php echo $dataUsuario->nombre_usuario ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Nombre del Grupo a Asignar:</label>
                                            <select name="cbo_tablero" id="cbo_tablero" class="form-select">
                                                <?php foreach ($dataGrupo as $data) : ?>
                                                    <option value="<?php echo $data->id_grupo ?>"><?php echo $data->nombre_grupo ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-dark w-100" name="btn-registrar-datos" id="btn-registrar-datos">Registrar Grupo</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->







<?php include_once('view/templates/footer.php'); ?>
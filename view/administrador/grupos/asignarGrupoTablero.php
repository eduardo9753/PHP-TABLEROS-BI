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
                            <form action="" id="AjaxFrmRegistrarGrupoTablero" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Nombre del Grupo</label>
                                            <input type="text" class="" value="<?php echo $dataGrupo->id_grupo; ?>" name="txt_id_grupo" id="txt_id_grupo" hidden>
                                            <input type="text" class="form-control" id="" value="<?php echo $dataGrupo->nombre_grupo ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Nombre del Tablero a Asignar:</label>
                                            <select name="cbo_tablero" id="cbo_tablero" class="form-select">
                                                <?php foreach ($dataTablero as $data) : ?>
                                                    <option value="<?php echo $data->id_tablero ?>"><?php echo $data->nombre_tablero ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-dark w-100" name="btn-registrar-grupo-tablero" id="btn-registrar-grupo-tablero">Registrar Tablero</button>
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
<?php include_once('view/templates/head.php'); ?>

<?php include_once('view/templates/navUsuario.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">MIS TABLEROS</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <?php include_once('view/helpers/close.php'); ?>
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
                <?php foreach ($this->USUARIO->dataTablerosByNombreGrupo($_SESSION["id_usuario"]) as $dataGrupo) : ?>
                    <h2>
                        <?php echo $dataGrupo->nombre_grupo ?>
                    </h2>
                    <?php foreach ($this->USUARIO->dataTablerosByIdUsuario($_SESSION["id_usuario"], $dataGrupo->nombre_grupo) as $data) : ?>
                        <div class="col-lg-6 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 class="text-justify"><?php echo utf8_encode($data->nombre_tablero) ?></h3>
                                    <?php if ($data->estado_tablero == 'A') : ?>
                                        <p>ESTADO : ACTIVO</p>
                                    <?php else : ?>
                                        <p>ESTADO : INACTIVO</p>
                                    <?php endif ?>
                                </div>
                                <div class="icon">
                                    <i class='bx bx-table'></i>
                                </div>
                                <a href="index.php?ruta=verMyTablero&id_tablero=<?php echo $data->id_tablero ?>" class="small-box-footer">Ir <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endforeach; ?>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->







<?php include_once('view/templates/footer.php'); ?>
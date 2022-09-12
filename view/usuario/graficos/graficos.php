<?php include_once('view/templates/head.php'); ?>

<?php include_once('view/templates/navUsuario.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">PAGINAS</h1>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">#Correos APROBADOS</label>
                                        <input type="text" class="form-control" name="txt_count_correos_aprobados" id="txt_count_correos_aprobados" value="<?php echo $dataCorreoAprobados ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">#Correos PENDIENTES</label>
                                        <input type="text" class="form-control" name="txt_count_correos_pendientes" id="txt_count_correos_pendientes" value="<?php echo $dataCorreoPendientes ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">#PAG.APROBADAS</label>
                                        <input type="text" class="form-control" name="txt_count_paginas_aprobadas" id="txt_count_paginas_aprobadas" value="<?php echo $dataPaginasAprobados ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">#PAG.PENDIENTES</label>
                                        <input type="text" class="form-control" name="txt_count_paginas_pendientes" id="txt_count_paginas_pendientes" value="<?php echo $dataPaginasPendientes ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">#APLIC.APROBADOS</label>
                                        <input type="text" class="form-control" name="txt_count_total" id="txt_count_aplicativos_aprobadas" value="<?php echo $dataAplicativosAprovados ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">#APLIC.PENDIENTES</label>
                                        <input type="text" class="form-control" name="txt_count_total" id="txt_count_aplicativos_pendientes" value="<?php echo $dataAplicativosPendientes ?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">#TOTALES</label>
                                        <input type="text" class="form-control" name="txt_count_total" id="txt_count_total" value="<?php echo $dataTotal ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <canvas id="myChart"></canvas>
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
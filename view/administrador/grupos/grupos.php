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
                        <?php include_once('view/administrador/grupos/modalCrearGrupo.php'); ?>
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
                            <table id="datatable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>ESTADO</th>
                                        <th>FECHA REGISTRO</th>
                                        <th><i class='bx bxs-binoculars'></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataGrupo as $data) : ?>
                                        <?php /*if ($data->FECHA_INFORME < date('d/m/Y')) { */ ?>
                                        <tr class="">
                                            <td><?php echo $data->nombre_grupo; ?></td>
                                            <td><?php echo $data->estado_grupo; ?></td>
                                            <td><?php echo $data->fecha_registro_sys; ?></td>
                                            <td>
                                                <?php include('view/administrador/grupos/modalEditarGrupo.php'); ?>
                                            </td>
                                        </tr>
                                        <?php /*}*/ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
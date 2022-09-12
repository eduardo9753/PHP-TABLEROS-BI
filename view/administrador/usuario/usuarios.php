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
                        <?php include_once('view/administrador/usuario/modalCrearUsuario.php'); ?>
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
                                        <th>USUARIO</th>
                                        <th>PASSWORD</th>
                                        <th>PERFIL</th>
                                        <th>FECHA DE REGISTRO</th>
                                        <th><i class='bx bxs-binoculars'></i></th>
                                        <th><i class='bx bx-folder-plus bx-tada'></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataUsuario as $data) : ?>
                                        <?php /*if ($data->FECHA_INFORME < date('d/m/Y')) { */ ?>
                                        <tr class="">
                                            <td><?php echo $data->nombre_usuario; ?></td>
                                            <td><?php echo $data->contra_usuario; ?></td>
                                            <td><?php echo $data->nombre_perfil; ?></td>
                                            <td><?php echo $data->fecha_registro_sys; ?></td>
                                            <td><?php include('view/administrador/usuario/modalEditUsuario.php'); ?> </td>
                                            <td>
                                                <?php if ($data->nombre_perfil !== 'ADMINISTRADOR') : ?>
                                                    <form action="UsuarioGrupo" id="" method="POST">
                                                        <input type="text" value="<?php echo $data->id_usuario ?>" name="txt_id_usuario" id="txt_id_usuario" hidden>
                                                        <button type="submit" name="" id="" class="btn btn-outline-dark">Asignar Grupo</button>
                                                    </form>
                                                <?php endif; ?>
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
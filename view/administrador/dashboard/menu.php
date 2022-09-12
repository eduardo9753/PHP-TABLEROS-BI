<?php include_once('view/templates/head.php'); ?>

<?php include_once('view/templates/navAdmin.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">MENU PRINCIPAL</h1>
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
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 class="lead">Tableros</h3>
                            <p>MIS TABLEROS</p>
                        </div>
                        <div class="icon">
                            <i class='bx bx-mail-send'></i>
                        </div>
                        <a href="Tableros" class="small-box-footer">Ir <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Grupos</h3>
                            <p>MIS GRUPOS</p>
                        </div>
                        <div class="icon">
                            <i class='bx bx-intersect'></i>
                        </div>
                        <a href="Grupos" class="small-box-footer">Ir <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>Asignacion de :</h3>
                            <p>USUARIOS CON GRUPOS</p>
                        </div>
                        <div class="icon">
                            <i class='bx bxl-microsoft'></i>
                        </div>
                        <a href="UsuariosConGrupos" class="small-box-footer">Ir <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- /.col-md-3 -->

                <!-- /.col-md-3 -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Asignacion de :</h3>
                            <p>GRUPOS CON TABLEROS</p>
                        </div>
                        <div class="icon">
                            <i class='bx bxl-microsoft'></i>
                        </div>
                        <a href="GrupoConTablero" class="small-box-footer">Ir <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->








<?php include_once('view/templates/footer.php'); ?>
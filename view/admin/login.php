<?php include_once('view/templates/head.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 p-0">
            <div class="fondo"></div>
        </div>
        <div class="col-md-4 p-0 fondo-trasparente">
            <div class="">
                <h2 class="white text-center text-dark py-5">BI LOGIN</h2>
            </div>
            <div class="">
                <div class="col-md-6 mx-auto centrar">
                    <form action="" id="frmAjaxLogin" method="POST">
                        <div class="container">
                            <div class="row text-center">
                                <div class="">
                                    <!--<div class="text-center my-3"><img src="public/img/user.png" alt=""></div>-->
                                    <div class="form-group">
                                        <label for="" class="morado my-3">Usuario</label>
                                        <input type="text" name="txt_usuario" id="txt_usuario" class="form-control" placeholder="Name User" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="morado my-3">Contraseña</label>
                                        <input type="password" name="txt_contra" id="txt_contra" class="form-control" placeholder="************" required>
                                    </div>

                                    <input type="submit" class="mt-3 my-btn" name="btn-login" id="btn-login" value="Ingresar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->
<script src="public/js/ajax.js"></script>
 
 <!-- jQuery -->
 <script src="public/plugins/jquery/jquery.min.js"></script>

 <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


 <!-- Bootstrap 4 -->
 <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- AdminLTE App -->
 <script src="public/dist/js/adminlte.min.js"></script>

 <!--SWEETALERT JS-->
 <script src="lib/sweetalert/dist/sweetalert2.all.min.js"></script>
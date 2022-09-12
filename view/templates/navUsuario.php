<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="dashboarUsuario" class="nav-link">Home</a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->



<!-- Main Sidebar Container -->
<aside class="main-sidebar color-nav elevation-4">
  <!-- Brand Logo -->
  <a href="dashboarUsuario" class="brand-link">
    <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light text-white">COLABORADOR</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="public/img/user.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block text-white">USER : <?php echo $_SESSION['nombre_usuario'] ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php foreach ($this->USUARIO->dataTablerosByNombreGrupo($_SESSION["id_usuario"]) as $dataGrupo) : ?>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link  border-nav">
              <i class='bx bx-mail-send bx-spin'></i>
              <p>
                <?php echo $dataGrupo->nombre_grupo ?>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php foreach ($this->USUARIO->dataTablerosByIdUsuario($_SESSION["id_usuario"], $dataGrupo->nombre_grupo) as $data) : ?>
                <li class="nav-item">
                  <a href="index.php?ruta=verMyTablero&id_tablero=<?php echo $data->id_tablero ?>" id="<?php echo $data->id_tablero ?>" class="nav-link <?php echo $active ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p><?php echo substr($data->nombre_tablero, 0, 18) ?> .....</p>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
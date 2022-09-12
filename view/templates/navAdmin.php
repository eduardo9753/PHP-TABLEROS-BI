<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="dashboardAdmin" class="nav-link">Home</a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dashboardAdmin" class="brand-link">
    <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ADMINISTRADOR</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="public/img/user.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">USER : <?php echo $_SESSION['nombre_usuario'] ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class='bx bx-mail-send bx-spin'></i>
            <p>
              TABLEROS
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="Tableros" class="nav-link <?php echo ($ruta == 'Tableros') ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>VER TABLEROS</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class='bx bx-navigation bx-tada'></i>
            <p>
              GRUPOS
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="Grupos" class="nav-link <?php echo ($ruta == 'Grupos') ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>VER GRUPOS</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class='bx bx-laptop bx-tada'></i>
            <p>
              ASIGNACION
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="GrupoConTablero" class="nav-link <?php echo ($ruta == 'GrupoConTablero') ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>GRUPO CON TABLERO</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UsuariosConGrupos" class="nav-link <?php echo ($ruta == 'UsuariosConGrupos') ? "active" : ""; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>USUARIO CON GRUPO</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
          <a href="Close" class="nav-link <?php echo ($ruta == 'Graficos') ? "active" : ""; ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              CERRAR SESSION
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
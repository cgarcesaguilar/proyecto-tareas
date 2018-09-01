<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php  echo $_SESSION["avatar"]; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php  echo $_SESSION["nom_user"]." ".$_SESSION["apellido_user"]; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú</li>
        <?php 
          if( $_SESSION["tipo_rol"] == 1) {
            echo '
              <li class="active"><a href="inicio"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
              <li><a href="usuarios"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
              <li><a href="tareas"><i class="fa fa-link"></i> <span>Tareas</span></a></li>
            ';
          } else {
            echo '<li><a href="mis-tareas"><i class="fa fa-link"></i> <span>Mis Tareas</span></a></li>';
          }
        ?>
        
        <!-- Optionally, you can add icons to the links -->
        
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

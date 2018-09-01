<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestionar Tareas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tareas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-insertar-tarea">
        <i class="fa fa-plus"></i> Agregar Tarea
      </button>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Fecha</th>
            <th scope="col">Término</th>
            <th scope="col">Trabajador</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php 

          //crear instancia de la clase del controlador
          $tareas = ControladorTareas::ctrListarTareas();

          

          foreach ($tareas as $key => $dato) {

            if ($dato["estado_tarea"] == 1) {
              $estado = '<span class="label label-success">Realizado</span>';
            } else {
              $estado = '<span class="label label-danger">No Realizado</span>';
            } 
            $nombreCompleto = $dato["nombre_usuario"]." ".$dato["apellido_usuario"];
            echo '
              <tr>
            <th scope="row">'.$dato["id_tarea"].'</th>
            <td>'.$dato["titulo_tarea"].'</td>
            <td>'.$dato["fecha"].'</td>
            <td>'.$dato["fecha_entrega"].'</td>
            <td>'.$nombreCompleto.'</td>
            <td>'.$estado.'</td>
            <td>
              <button class="btn btn-info btn-sm">
                <i class="fa fa-edit"></i>
              </button>
              <button class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>


            ';
          }


          ?>


          

          
        </tbody>
      </table>

    </section>
    <!-- /.content -->
  </div>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminTask</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- HOJAS DE ESTILO DE PLUGINS -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="vistas/dist/css/skins/skin-blue.min.css">

  <!-- Fuente de Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">


  <?php
    //inicializa una sesión
    //$_SESSION["algo"] => Son variables GLOBALES para creación de sesiones.
    session_start();


    if (isset($_SESSION["autenticar"]) && $_SESSION["autenticar"] == true) {
      echo '<div class="wrapper">';

      include "modulos/cabezal.php";
      include "modulos/barra-lateral.php";
      // isset sirve para validar que una variable se encuentre inicializada
      
      if (isset($_GET["ruta"])) {

        $enrutamiento = new ControladorEnrutamiento();
        $enrutamiento -> traerRuta();

        include "modulos/modales/modal-".$_GET["ruta"].".php";


      } else {
        include "modulos/inicio.php";
      }


    
    include "modulos/pie-de-pagina.php";
    echo '<div>';





    } else {
      include "modulos/login.php";
    }



    
    

  ?>


  
</div>
<!-- PLUGINS DE JS  -->
<script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vistas/dist/js/adminlte.min.js"></script>
<script src="vistas/dist/js/gestionarTareas.js"></script>

</body>
</html>
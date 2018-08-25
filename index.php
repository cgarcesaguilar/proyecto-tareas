<?php 

// permite requerir un archivo para ser utilizado con toda su programación
require_once "controladores/plantilla.controlador.php";
require_once "controladores/enrutamiento.controlador.php";

//instanciar un objeto de la clase ControladorPlantilla y utilizar uno de sus métodos.
$plantilla = new ControladorPlantilla();
$plantilla -> traerPlantilla();


<?php 

Class ControladorEnrutamiento {

	public function traerRuta() {
		$enlace = $_GET["ruta"];
		if ($enlace == "inicio" ||
			$enlace == "usuarios" ||
			$enlace == "tareas" ||
			$enlace == "mis-tareas" ) {
			include "vistas/modulos/".$enlace.".php";
		} else {
			include "vistas/modulos/error404.php";
		}

	}

}

?>
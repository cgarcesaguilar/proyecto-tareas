<?php 

Class ControladorTareas {

	public function ctrListarTareas() {
		//Creamos una instancia que nos devuelva los datos del modelo.

		$respuesta = ModeloTareas::mdlListarTareas();

		return $respuesta;

	}

}

?>
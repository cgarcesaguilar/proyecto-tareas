<?php 	

require_once "conexion.php";

class SesionModelo {

	static public function mdlInicioSesion($tabla, $correo) {
		//la preparación de la consulta.
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE correo_usuario = '$correo'");

		//ejecutar la consulta.
		if ( $sql->execute() ) {
			return $sql->fetch();	
		} else {
			return "error";
		}

		

	}

}

?>
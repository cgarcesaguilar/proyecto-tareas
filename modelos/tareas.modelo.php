<?php 
require_once "conexion.php";

Class ModeloTareas {

	static public function mdlListarTareas() {


		$sql = "SELECT t.id_tarea, t.titulo_tarea, t.fecha, t.fecha_entrega, t.estado_tarea, u.nombre_usuario, u.apellido_usuario FROM tareas t, usuarios u WHERE t.id_usuario = u.id_usuario ORDER BY fecha DESC";
		$stmt = Conexion::conectar()->prepare($sql);

		$stmt->execute();

		return $stmt->fetchAll();

	}

}

?>
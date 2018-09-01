<?php 	

class InicioSesion {

	public function ctrIniciarSesion() {

		if ( isset($_POST["correo"]) ) {
			$tabla = "usuarios";
			$correo = $_POST["correo"];
			$password = $_POST["password"];

			$respuesta = SesionModelo::mdlInicioSesion($tabla, $correo);

			//var_dump permite leer un arreglo de datos.
			
			if ($respuesta["correo_usuario"] == $correo && $respuesta["password_usuario"] == $password) {
				//DEFINIMOS TODAS LAS VARIABLES GLOBALES DE SESION
				$_SESSION["autenticar"] = true;
				$_SESSION["nom_user"] = $respuesta["nombre_usuario"];
				$_SESSION["apellido_user"] = $respuesta["apellido_usuario"];
				$_SESSION["tipo_rol"] = $respuesta["rol_usuario"];
				$_SESSION["avatar"] = $respuesta["avatar_usuario"];

				echo '<script>
						window.location = "inicio"
					</script>
					';
			} else {
				echo '<br>
				<div class="alert alert-danger">
						<i class="fa fa-exclamation" aria-hidden="true"></i> Datos incorrectos. Inténtelo nuevamente.
					</div>';
			}
		}
		


	}

}

?>
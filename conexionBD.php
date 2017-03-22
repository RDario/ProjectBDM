<?php
function conectarBD() {
	$conexion = mysqli_connect("localhost", "root", "", "BDMprueba");
	if (mysqli_connect_errno()) {
		echo 'Error al conectar la base de datos' . mysqli_connect_error();
	} else {
		echo 'Se conecto a la base de datos exitosamente';
	}
	return $conexion;
}
?>
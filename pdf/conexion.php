<?php 

  $servidor = "localhost";
		$nombreusuario = "root";
		$password = "12345678";
		$database = "bdunad46";
		$conexion = new mysqli($servidor, $nombreusuario, $password, $database );
		if($conexion->connect_error){
			die("Conexion fallida : " . $conexion->connect_error);
	}
?>
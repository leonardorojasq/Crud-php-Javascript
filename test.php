<?php
    $servidor = "localhost";
	$nombreusuario = "root";
	$password = "12345678";
	$database = "bdunad46";
	$conexion = new mysqli($servidor, $nombreusuario, $password, $database );
	if($conexion->connect_error){
			die("Conexion fallida : " . $conexion->connect_error);
	}
	$sql = "SELECT * FROM tabla46";
	$id = $_POST['id'];
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$marca = $_POST['marca'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];
	
$sql =	("UPDATE tabla46 SET id = $id, codigo = $codigo, nombre = $nombre, marca = $marca, precio = $precio, cantidad = $cantidad WHERE id ='$id'");
	$resultado = $conexion->query($sql);

?>	

 <!-- PAGE CONTENT BEGINS -->
		 <div class="container">
				 <div class="row">
				<div class="row" style="position: relative">
				 <?php if($resultado) { ?>	
				  <h4>REGISTRO MODIFICADO</h4> 
				 <?php } else { ?>	
				  <h4>ERROR AL MODIFICAR EL REGISTRO</h4> 	
				 <?php } ?>	
					<a href="rnt.php" class="btn btn-pink">Volver</a>
				</div>
				  </div>
			    </div>
 <!-- PAGE CONTENT END -->
	 
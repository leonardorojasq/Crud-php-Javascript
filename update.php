<?php
 $servidor = "localhost";
 $nombreusuario = "root";
 $password = "12345678";
 $database = "bdunad46";
 $conexion = new mysqli($servidor, $nombreusuario, $password, $database );
 if($conexion->connect_error){
		 die("Conexion fallida : " . $conexion->connect_error);
 }

$id = $_GET['id'];
  
	$sql = (" SELECT * FROM tabla46 WHERE id = '$id' ");	
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio Fase3</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div ><img src="img/logo.jpg" style="width: 100%; height: auto" alt="logo-pcelectronics"></div>
<!-------------------------------INICIO MENU-------------------------------------------------->
 <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255,150,0,1.00);">
  <div class="container-fluid">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrador</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="crearbd.php">Crear Base de Datos</a></li>
            <li><a class="dropdown-item" href="creartabla.php">Crear Tabla</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="pdf/generarpdf.php">Generar reporte PDF</a></li>
			  <li><a class="dropdown-item" href="respaldo.php">Generar Backup</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">Inventarios</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="ingresar.php">Ingresar</a></li>
            <li><a class="dropdown-item" href="actualizar.php">Actualizar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="eliminar.php">Eliminar</a></li>
			  <li><a class="dropdown-item" href="consultar.php">Consultar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utilidades
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="utilidades.html">Utilidades</a></li>
            <li><a class="dropdown-item" href="conversion.html">Equivalencias entre Datos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!----------------------------------------FIN MENU--------------------------------------------->
<section>
	<h3 class="centrar-h3">Cambie los datos a actualizar</h3>
<div class="caja-formulario">
	
 <form method="POST" action="modificartabla.php" class="form-control">
	<div>
	 <label class="form-label">ID</label>
	<input type="text" id="id" name="id" value="<?php echo $row['id'] ?>" class="form-control" autofocus required>
	</div> 
	<div>
	 <label class="form-label">Código de producto</label>
		<input type="text" id="codigo" name="codigo" value="<?php echo $row['codigo'] ?>" class="form-control" autofocus required>
	</div>
    <div>
	 <label class="form-label">Nombre de producto</label>
		<input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre'] ?>" class="form-control" required>
	</div>
	<div>
	 <label class="form-label">Marca del producto</label>
		<input type="text" id="marca" name="marca" value="<?php echo $row['marca'] ?>" class="form-control" required>
	</div>
	<div>
	 <label class="form-label margen">Precio de compra</label>
		<input type="text" id="precio" name="precio" value="<?php echo $row['precio'] ?>" class="form-control" required>
	</div>
	<div>
	 <label class="form-label">Cantidad comprada</label>
		<input type="text" id="cantidad" name="cantidad" value="<?php echo $row['cantidad'] ?>" class="form-control" required>
	</div> 
	<br> 
	<div>
		<input type="submit" name="submit" value="Actualizar" class="btn btn-primary">
	</div> 
 </form>	
	</div>	
</section>
	
<!--  Bootstrap JS -->
<script src="js/bootstrap.js"></script>
</body>
</html>
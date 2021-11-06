<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Bases de datos</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
<h1 class="titulo">Crearción Bases de datos</h1>
<div class="bdcreada">
	<?php
	$servidor = "localhost";
	$nombreusuario = "root";
	$password = "12345678";

	$conexion = new mysqli($servidor, $nombreusuario, $password);
		if($conexion->connect_error){
			die("<font color='red'>"."Conexion fallida : " ."</font>". $conexion->connect_error);
		}

		$sql = "CREATE DATABASE bdunad46";
			if($conexion->query($sql) === true){
				echo "<font color='green'>"."Base de datos creada correctamente!"."</font>";
			}else{
				die("<font color='green'>"."La base de datos ya esta creada!"."</font>" . $conexion->connect_error);
			}

	?>
  </div>		
<!--  Bootstrap JS -->
<script src="js/bootstrap.js"></script>
</body>
</html>



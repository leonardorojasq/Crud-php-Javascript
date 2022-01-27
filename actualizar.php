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
		 $resultado = $conexion->query($sql);
			?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Productos</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-glyphicons.css">
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

<section class="container-fluid">
 <h3 class="titulo">Actualizar Productos</h3>
	<table class="table table-primary" >
	 <thead style="width: 100%;color:#FF8600;">
		 <th>ID</th>
	     <th>Código de producto</th>
		 <th>Nombre de producto</th>
		 <th>Marca del producto</th>
		 <th>Precio de compra</th>
		 <th>Cantidad comprada</th>
		 <th>Actualizar</th>
	 </thead>
  
   <tbody>
   <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>   	
		<tr>
			 <td><?php echo $row['id']; ?></td>	 
			  <td><?php echo $row['codigo']; ?></td>
			   <td><?php echo $row['nombre']; ?></td>
			   <td><?php echo $row['marca']; ?></td>	 
			  <td><?php echo $row['precio']; ?></td>
			 <td><?php echo $row['cantidad']; ?></td>		
		<td><a href="update.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil" ></span></a></td>
		 </tr>  
     <?php } ?>
      </tbody>
	</table>	
</section>
	
<!--  Bootstrap JS -->
<script src="js/bootstrap.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio Fase3</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeIn("slow");
});
</script>
	</head>
<body class="loader"> 
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
<?php 
  function exportarTablas($host, $usuario, $pasword, $nombreDeBaseDeDatos)
{
    set_time_limit(3000);
    $tablasARespaldar = [];
    $mysqli = new mysqli($host, $usuario, $pasword, $nombreDeBaseDeDatos);
    $mysqli->select_db($nombreDeBaseDeDatos);
    $mysqli->query("SET NAMES 'utf8'");
    $tablas = $mysqli->query('SHOW TABLES');
    while ($fila = $tablas->fetch_row()) {
        $tablasARespaldar[] = $fila[0];
    }
    $contenido = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\nSET time_zone = \"+00:00\";\r\n\r\n\r\n/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\r\n/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\r\n/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\r\n/*!40101 SET NAMES utf8 */;\r\n--\r\n-- Database: `" . $nombreDeBaseDeDatos . "`\r\n--\r\n\r\n\r\n";
    foreach ($tablasARespaldar as $nombreDeLaTabla) {
        if (empty($nombreDeLaTabla)) {
            continue;
        }
        $datosQueContieneLaTabla = $mysqli->query('SELECT * FROM `' . $nombreDeLaTabla . '`');
        $cantidadDeCampos = $datosQueContieneLaTabla->field_count;
        $cantidadDeFilas = $mysqli->affected_rows;
        $esquemaDeTabla = $mysqli->query('SHOW CREATE TABLE ' . $nombreDeLaTabla);
        $filaDeTabla = $esquemaDeTabla->fetch_row();
        $contenido .= "\n\n" . $filaDeTabla[1] . ";\n\n";
        for ($i = 0, $contador = 0; $i < $cantidadDeCampos; $i++, $contador = 0) {
            while ($fila = $datosQueContieneLaTabla->fetch_row()) {
                //La primera y cada 100 veces
                if ($contador % 100 == 0 || $contador == 0) {
                    $contenido .= "\nINSERT INTO " . $nombreDeLaTabla . " VALUES";
                }
                $contenido .= "\n(";
                for ($j = 0; $j < $cantidadDeCampos; $j++) {
                    $fila[$j] = str_replace("\n", "\\n", addslashes($fila[$j]));
                    if (isset($fila[$j])) {
                        $contenido .= '"' . $fila[$j] . '"';
                    } else {
                        $contenido .= '""';
                    }
                    if ($j < ($cantidadDeCampos - 1)) {
                        $contenido .= ',';
                    }
                }
                $contenido .= ")";
                # Cada 100...
                if ((($contador + 1) % 100 == 0 && $contador != 0) || $contador + 1 == $cantidadDeFilas) {
                    $contenido .= ";";
                } else {
                    $contenido .= ",";
                }
                $contador = $contador + 1;
            }
        }
        $contenido .= "\n\n\n";
    }
    $contenido .= "\r\n\r\n/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\r\n/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\r\n/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;";

    # Aqui va l acarpeta de respaldo
    $carpeta = __DIR__ . "/respaldos";
    if (!file_exists($carpeta)) {
        mkdir($carpeta);
    }

    # Calcular un ID único
    $id = uniqid();

    # También la fecha
    $fecha = date("Y-m-d");

    # Crear un archivo que tendrá un nombre como respaldo_2018-10-22_asd123.sql
    $nombreDelArchivo = sprintf('%s/respaldo_%s_%s.sql', $carpeta, $fecha, $id);

    #Escribir todo el contenido. Si todo va bien, file_put_contents NO devuelve FALSE
    return file_put_contents($nombreDelArchivo, $contenido) !== false;
}

exportarTablas("localhost", "root", "12345678", "bdunad46"); 

?>
	<h4 class="titulo" style="color: green;">Copia de seguridad creada</h4>
  <!--  End-->
<!--  Bootstrap JS -->
<script src="js/bootstrap.js"></script>
</body>
</html>
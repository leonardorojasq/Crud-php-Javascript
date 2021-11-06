
<?php 
require("fpdf/fpdf.php"); 

	class PDF extends FPDF {
		function Header()
{

    $this->Image('logo.jpg',10,6,30,8,'JPG');
    $this->SetFont('Arial','B',15);
    $this->Cell(30);
    $this->Cell(30,10,'Title',1,0,'C');
    $this->Ln(20);
}
	
	
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'Pagina ',
		$this->PageNo().'/{nb}',0,0,'C' );
	}
	
}

	 require('conexion.php');
	 $sql = "SELECT * FROM tabla46";
	 $resultado = $conexion->query($sql);

	$pdf = new FPDF('L','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',15);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(30,6,'CODIGO',1,0,'C',1);
	$pdf->Cell(90,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(60,6,'MARCA',1,0,'C',1);
	$pdf->Cell(40,6,'PRECIO',1,0,'C',1);
	$pdf->Cell(30,6,'CANTIDAD',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	$resultado = $conexion->query($sql);
	while($row = $resultado->fetch_array(MYSQLI_ASSOC) ) {
	$pdf->Cell(10,6,$row['id'],1,0,'C',1);
	$pdf->Cell(30,6,$row['codigo'],1,0,'C',1);
	$pdf->Cell(90,6,utf8_decode($row['nombre']),1,0,'C',1);
	$pdf->Cell(60,6,utf8_decode($row['marca']),1,0,'C',1);
	$pdf->Cell(40,6,$row['precio'],1,0,'C',1);
	$pdf->Cell(30,6,$row['cantidad'],1,1,'C',1);	
			
		}

	$pdf->Output();
	?>

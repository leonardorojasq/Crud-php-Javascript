
function limpiar() {//funcion limpiar formulario
	document.getElementById('formularioCalcular').reset();
	document.getElementById('ventas').reset();
	document.getElementById('ganancias').reset();
}

function calcular() {
	if (document.getElementById('ValorCompra').value == "" || document.getElementById('PorcentajeUtilidad').value == "" || document.getElementById('Iva').value == "") {
		alert("Todos los campos son obligatorios");
		return(false);
	}else{
	var vc = parseInt(document.getElementById('ValorCompra').value);//Valor Compra
	var pu = parseInt(document.getElementById('PorcentajeUtilidad').value);//Porcentaje de Utilidad
    var iva = parseInt(document.getElementById('Iva').value);//Porcentaje Iva

    var pG = (vc * pu)/100;//Valor Compra por Porcentaje de Utilidad
    var pI = (vc * iva)/100;//Valor Compra por Porcentaje Iva
    var vV = vc + pG + pI; //suma de Valor Compra mas porcentaje ganancia(pG) + porcentaje Iva(pI)


 	document.getElementById('valor-venta').value = vV;
	document.getElementById('ganancia').value = pG;
 }
}


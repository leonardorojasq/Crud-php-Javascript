# Crud-php-Javascript
Pagina web utilizando Php, css3 y JavaScript

El sitio web consta de 10 funcionalidades, las cuales describiremos a continuación:
1.	MENU UTILIDADES

1.1	CALCULO DE GANANCIAS.
Este formulario está diseñado con lenguaje HTML, Css y JavaScript, el cual permite ingresar tres valores numéricos, Valor compra, porcentaje de utilidad y porcentaje del IVA o impuesto nacional.
El formulario envía por medio de un formulario los datos recibidos y un script en JavaScript recibe estos tres datos y devuelve el valor de venta con la utilidad y el IVA y por otro lado envía las ganancias del producto vendido.
1.2	EQUIVALENCIAS ENTRE DATOS.
Este formulario está diseñado con lenguaje HTML, Css y JavaScript, el cual permite pasar de medidas de datos como kilobytes, megabyte, gigabyte y terabyte, en el primer campo se ingresa un dato numérico y da la opción en las otras dos cajas de selección elegir inicial y en la otra caja de selección el otro dato a convertir, entregando los datos solicitados.

2.	MENU ADMINISTRADOR

2.1	CREAR BASE DE DATOS
Esta opción se crea una base de datos con el nombre de ‘bdunad46’ en Mysql, y se muestra al usuario con un mensaje cuando se crea que la base datos ‘La base de datos se creó exitosamente’, y en caso que ya este creada se muestra el mensaje que ‘La base de datos ya existe, el script está diseñado en lenguaje Php, HTML y Css.

2.2	CREAR TABLA
Esta opción se crea una tabla en la base de datos creada ‘bdunad46’, con el nombre ‘tabla46’ en Mysql, y se muestra al usuario con un mensaje cuando se crea la tabla ‘La tabla se creó exitosamente’, y en caso que ya este creada se muestra el mensaje que ‘La tabla ya existe, el script está diseñado en lenguaje Php, HTML y Css.


2.3	GENERAR REPORTE PDF
Esta opción genera un archivo en formato pdf, hizo uso de la herramienta de ’FPDF’, la cual contiene las funciones y clases para generar reportes en pdf, se creó un script donde hacemos el llamado a la “tabla46” para que muestre los datos ingresados en un pdf.

2.4	GENERAR BACKUP 
Esta opción genera Backus de la base de datos completa sin importar cuantas tablas existan, este script hace un recorrido por la base de datos y extrae las tablas en un .sql estos datos se almacenan en una carpeta llamada “respaldos” en la raíz del sitio web, se nombran con la fecha de la creación, esta función está diseñado en HTML, Php y Css.

3.	MENU INVENTARIOS CRUD

3.1	INSERTAR
En esta opción de sub-menús encontramos La opción “Ingresar” en este formulario lo datos de los productos como son:
Código.
Nombre.
Marca.
Precio.
Cantidad.
Por medio del botón “Agregar” estos datos se ingresan en la base de datos “bdunad46” antes creada, en Mysql en la “tabla46”, para posteriormente ser visualizados, este formulario cuenta con lenguaje Php, HTML y Css.
3.2	ACTUALIZAR
En este formulario se actualizan los datos ya ingresados a la base de datos, se pueden cambiar los valores descritos en el apartado 3.1 para luego poder ser actualizados y guardados de nuevo en la “tabla46”, este formulario está diseñado en HTML, Php y Css.

3.3	ELIMINAR
Este formulario permite eliminar productos de la “tabla46”, estos productos que ya no existen o no se tienen y que para actualizar el inventario lo mejor es no tenerlo en existencia dando un clic en el icono de la “X”, y es eliminado este formulario, está diseñado en HTML, Php y Css.

3.4	CONSULTAR
En este formulario se muestran los datos ya ingresados a la base de datos, como se valores describe en el apartado 3.1, este formulario está diseñado en HTML, Php y Css.



<?php 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');


//$codigo = $_POST["cod"];
$precio = $_POST["precioP"];
$descripcion = $_POST["descripcionP"];
$tipoproducto = $_POST["tipoP"];
$marca = $_POST["marcaP"];
$sector = $_POST["sectorP"];
$color = $_POST["colorP"];
$garantia = $_POST["garantiaP"];
$talla = $_POST["tallaP"];
$genero = $_POST["generoP"];
$cantidad = $_POST["cantidad"];
$empleado = $_POST["empl"];


	$insertar = "select InsertarProducto('$precio','$descripcion', '$marca', '$garantia' ,'$genero','$sector','$color','$talla','$tipoproducto','$empleado','$cantidad')";

	$ejecutar = pg_query($conexion, $insertar);

	if($ejecutar){
		echo "<h2>El producto ha sido registrado con éxito</h2>";
		}		




?>
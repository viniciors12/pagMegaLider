<?php 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');


$codigo = $_POST["cod"];
$codEmpleado = $_POST["codEmp"];
$dateInv = $_POST["date"];
$producto = $_POST["codP"];
$cantP = $_POST["cantidad"];



	$insertar = "select insertInvPro('$codigo','$codEmpleado', '$dateInv', '$producto' ,'$cantP')";

	$ejecutar = pg_query($conexion, $insertar);

	if($ejecutar){
		echo "<h2>Registro con éxitoso!</h2>";
		}		




?>
<?php 
 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');


$codigo = $_POST["idp"];



	$eliminar = "select ElimProducto('$codigo')";

	$ejecutar = pg_query($conexion, $eliminar);

	if($ejecutar){
		echo "El producto ha sido eliminado con éxito";
		}		




?>
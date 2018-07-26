<?php 
 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');


$codigo = $_POST["idp"];


$sel= "SELECT * FROM Persona where idpersona = '$codigo'";

$ejecutar = pg_query($conexion, $sel);

$check= pg_num_rows($ejecutar);


if($check==0){

	echo "No existe ese empleado, intentelo de nuevo!";
	exit();



}else{

	

	$eliminar = "select ElimPersona('$codigo')";

	$ejecutar = pg_query($conexion, $eliminar);

	if($ejecutar){
		echo "El empleado ha sido eliminado con éxito";
		}		


}

?>
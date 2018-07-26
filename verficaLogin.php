<?php 

$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');


$id = $_POST["idEm"];
$contra = $_POST["contraEm"];

$sel= "SELECT tipoUsuario FROM Persona where idPersona = '$id';


$ejecutar = pg_query($conexion, $sel);

echo "$sel";

?>

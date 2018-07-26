<?php 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');


$id = $_POST["idEm"];
$nombre = $_POST["nombreEm"];
$apellido = $_POST["apellidoEm"];
$apellido2 = $_POST["sapellidoEm"];
$contra = $_POST["contraEm"];
$verifContra = $_POST["verifContraEm"];
$tEm = $_POST["tipoEm"];
$correo = $_POST["correoEm"];
$salario = $_POST["salarioEm"];
$tpago = $_POST["tPagoEm"];
$fecha = $_POST["fPagoEm"];
$telefono = $_POST["telefonoEm"];



$sel= "SELECT * FROM Persona where idPersona = '$id'";

$ejecutar = pg_query($conexion, $sel);

$checkName= pg_num_rows($ejecutar);


if($checkName==1){

	echo "<h2>Ya hay un usuario con esa cédula registrado, intentalo de nuevo</h2>";
	exit();



}else{

	if($verifContra==$contra){

	$insertar = "select InsertPersona('$id','$contra', '$nombre', '$apellido','$apellido2','$correo','$tEm',
	'$telefono','$tpago',$salario,'$fecha')";

	$ejecutar = pg_query($conexion, $insertar);

	if($ejecutar){
		echo "<h2>El usuario ha sido registrado con éxito</h2>";
		}		
	}else{echo "<h2>Las contraseñas deben coincidir, intentelo de nuevo</h2>";exit();}


}

?>
<?php 
 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque') or die("Could not connect");

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



$sel= "select actualizarPersona('$id','$contra','$nombre','$apellido','$apellido2','$correo','$tEm','$telefono'
,'$tpago','$salario','$fecha')";

$ejecutar = pg_query($conexion, $sel);

if($verifContra==$contra){

if($ejecutar){
		echo "<h2>El usuario ha sido modificado con éxito</h2>";
				
	}else{echo "<h2>Lo sentimos, ha habido un error</h2>";exit();}
}else{echo "<h2>Las contraseñas deben coincidir, intentelo de nuevo</h2>";exit();}

?>
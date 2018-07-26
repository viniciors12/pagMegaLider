
<?php 
session_start();

session_unset();
?>



<?php 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');





$id = $_POST["idEm"];
$contra = $_POST["contraEm"];
$_SESSION["usuario"]="$id";


$sel= "SELECT * FROM Persona where idPersona = '$id' AND contrasenna ='$contra'";


$ejecutar = pg_query($conexion, $sel);

$checkName= pg_num_rows($ejecutar);


if($checkName==1){
	
	$row = pg_fetch_row($ejecutar);

	if($row[6] =='A'){
	echo "<h2>Bienvenido!</h2>";

	$_SESSION["tipoUsuario"]="A";

	echo "<meta http-equiv='refresh' content='1; url=Inicio.php'/>";
	
	exit;
	}

	else{
		$_SESSION["tipoUsuario"]="E";
		echo "<h2>Bienvenido!</h2>";

		echo "<meta http-equiv='refresh' content='1; url=Inicio.php'/>";
	}

}

else{
	echo "<h2>ID o password incorrecta, intentelo de nuevo!</h2>";
	exit();
}

?>

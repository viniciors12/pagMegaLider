<?php
session_start();
?>

<?php 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque');

$cedula = $_POST["cedulaF"];

$productos = $_POST["productoF"];
$cliente = $_POST["clienteF"];


foreach ($productos as $valor) {

     $code = $valor['code'];
     $cantidad = $valor['quantity'];
     $linea = "select insertarLinea($code,$cantidad)";
     $ejecutarL = pg_query($conexion, $linea);
     $data =  pg_fetch_array($ejecutarL);
     //echo "<h2>".$data[0]."</h2>";

     if($data[0] == 0){

     	echo "<h2>Compra realizada, correctamente!</h2>";
     }
     else{echo "<h2>No hay suficientes productos en el inventario!</h2>";}
}

 $insertar = "select InsertarFac('$cedula','$cliente')";
 $ejecutar = pg_query($conexion, $insertar);


?>
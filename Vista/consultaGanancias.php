<?php 

    $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque') or die("Could not connect");

	$fecha = $_POST["fechaCons"];


	$sel= "select ConsultaGanancias('$fecha')";

	$ejecutar = pg_query($conexion, $sel);
	$rows= pg_num_rows($ejecutar);
  $data =  pg_fetch_array($ejecutar);

    if($data[0] !=null){

      

      echo "<h2>Se han contabilizado ".$data[0]." colones en ganancias</h2>";


      pg_close($conexion);
    }

    else{echo "<h2>No se han contabilizado ganancias a partir de esa fecha</h2>";
    pg_close($conexion);}


    ?>
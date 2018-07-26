

	<table class="table">
      <thead class="thead">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody>
    <?php 

    $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque') or die("Could not connect");

	$id = $_POST["codigo"];


	$sel= "select idproducto, precion, descripcion from producto where idproducto='$id'";

	$ejecutar = pg_query($conexion, $sel);
	$rows= pg_num_rows($ejecutar);


    if($rows>0){

      while($row = pg_fetch_row($ejecutar)){

        echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
      }
      echo "</tbody>";

      pg_close($conexion);
    }


    ?>
  </tbody>
</table>
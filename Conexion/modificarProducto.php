<?php 
 
$conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque') or die("Could not connect");

$id = $_POST["idp"];
$precio = $_POST["precioP"];
$descripcion = $_POST["descripcionP"];
$marca = $_POST["marcaP"];
$garantia = $_POST["garantiaP"];
$genero = $_POST["generoP"];
$sector = $_POST["sectorP"];
$color = $_POST["colorP"];
$talla = $_POST["tallaP"];
$var;

$consultica = "select * from 

        (select p.idproducto,p.precion,p.descripcion, 'z' as type from producto p 
        inner join
          zapateria z on p.idproducto = z.idproducto
      
          union
        select p.idproducto,p.precion,p.descripcion, 'e' as type from producto p 
                inner join
                  escolar es on p.idproducto = es.idproducto
          union
        select p.idproducto,p.precion,p.descripcion, 'h' as type from producto p 
                inner join
                  hogar h on p.idproducto = h.idproducto
            
                union
        select p.idproducto,p.precion,p.descripcion, 'm' as type from producto p 
                inner join
                  muebleria m on p.idproducto = m.idproducto
          union
        select p.idproducto,p.precion,p.descripcion, 'r' as type from producto p 
          inner join
          ropa r on p.idproducto = r.idproducto) as q

          where q.idproducto =$id";

$ejecutar = pg_query($conexion, $consultica);
$row = pg_fetch_row($ejecutar);

if($row[3]=='z'){
	$var = 1;
}
else if($row[3]=='e'){
	$var = 2;
}
else if($row[3]=='m'){
	$var = 3;
}
else if($row[3]=='r'){
	$var = 4;
}
else if($row[3]=='h'){
	$var = 5;
}



$sel= "select actualizarProducto('$id','$precio','$descripcion','$marca',$garantia,'$genero','$sector','$color'
,'$talla','$var')";}



$ejecutar = pg_query($conexion, $sel);

if($ejecutar){
		echo "<h2>El producto ha sido modificado con éxito</h2>";}

else{
	echo"Lo sentimos, ha habido un error";
}		

?>
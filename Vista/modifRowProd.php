<!doctype html>
<html lang="en">
  <head>
<div id="formEmpleado">

        <?php 

        $codigo = $_POST["codigo"];
        $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque') or die("Could not connect");

        $selm= "SELECT * FROM Marca";
        $selc= "SELECT * FROM Color";
        $sels= "SELECT * FROM Sector";

        $ejecut1 = pg_query($conexion, $selm);
        $ejecut2 = pg_query($conexion, $selc);
        $ejecut3 = pg_query($conexion, $sels);



        
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

          where q.idproducto =$codigo";




          $zapatos = "

        select p.idproducto,p.precion,p.descripcion,m.nombremarca,z.genero,z.garantia,z.talla  from producto p 
        inner join
          zapateria z on p.idproducto = z.idproducto
        inner join
          marca m on z.idmarca = m.idmarca

          where z.idproducto =$codigo";

          $escolar= "
        select p.idproducto,p.precion,p.descripcion,m.nombremarca from producto p 
        inner join
          escolar e on p.idproducto = e.idproducto
        inner join
          marca m on e.idmarca = m.idmarca 
          where e.idproducto =$codigo";

          $hogar ="

          select p.idproducto,p.precion,p.descripcion,s.nombresector from producto p 
                  inner join
                    hogar h on p.idproducto = h.idproducto
                  inner join
                    sector s on h.idsector = s.idsector        
          where h.idproducto =$codigo"; 

          $muebleria = "select p.idproducto,p.precion,p.descripcion,m.garantia from producto p 
        inner join
          muebleria m on p.idproducto = m.idproducto
          where m.idproducto =$codigo";

          $ropa ="select p.idproducto,p.precion,p.descripcion,m.nombremarca,r.genero,c.nombrecolor,r.talla from producto p 
        inner join
          ropa r on p.idproducto = r.idproducto
         inner join
         marca m on r.idmarca = m.idmarca
         inner join
         color c on c.idcolor = r.idcolor
         where r.idproducto =$codigo";



         $ejecutar1 = pg_query($conexion, $zapatos);
         $zap = pg_fetch_row($ejecutar1);

        $ejecutar2 = pg_query($conexion, $escolar);
        $escol = pg_fetch_row($ejecutar2);

        $ejecutar3 = pg_query($conexion, $hogar);
        $hog = pg_fetch_row($ejecutar3);

        $ejecutar4 = pg_query($conexion, $muebleria);
        $mueble = pg_fetch_row($ejecutar4);

        $ejecutar5 = pg_query($conexion, $ropa);
        $rop = pg_fetch_row($ejecutar5);



        $ejecutar = pg_query($conexion, $consultica);
        $row = pg_fetch_row($ejecutar);

        $marcaActual = "";
        

        echo"<div class='form-group'>
        <label for='precio'>Código:</label>
        <input disabled='disabled' type='TEXT' name='codigoP' class='form-control' id='codigo' value=" . $row[0]. "></div>";

        echo"<div class='form-group'>
        <label for='precio'>Precio:</label>
        <input type='TEXT' name='precioP' class='form-control' id='precio' value=" . $row[1]. "></div>";

        echo"<div class='form-group'>
        <label for='descrip'>Descripción:</label>
        <input type='TEXT' name='descripcionP' class='form-control' id='descripcion' value=" . $row[2]. "></div>";

        
        if($row[3]!='m'){
        
        if($row[3]=='z' || $row[3]=='e'||$row[3]=='r'){
        echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='marca'>Marca</label>
              <select class='custom-select mr-sm-2' name='marca' id='marca'>";
              if($row[3]=='z'){
                $marcaActual = $zap[3];
              }
              else if($row[3]=='e'){
                $marcaActual = $escol[3];
              }
              else{
                $marcaActual = $rop[3];
              }

              while($rowm = pg_fetch_row($ejecut1)){
                if($marcaActual == $rowm[1]){
                   echo "<option selected value=". $rowm[0] .">" . $rowm[1] . "</option>";
                }
                else{
                  echo "<option value=". $rowm[0] .">" . $rowm[1] . "</option>";
                }
               
              }
              
              echo "</select>
            </div>
          </div>";
        }
      }




        if($row[3]=='z' || $row[3]=='m'){
          if($row[3]=='z'){
        echo"<div class='form-group'>
        <label for='garantia'>Garantia:</label>
        <input type='text' name='garantiaP' class='form-control' id='garantia' value=" . $zap[5]. "></div>";}}
         

         if($row[3]=='m'){
          echo"<div class='form-group'>
        <label for='garantia'>Garantia:</label>
        <input type='text' name='garantiaP' class='form-control' id='garantia' value=" . $mueble[3]. "></div>";}
         


        if($row[3]=='r' || $row[3]=='z'){
          if($row[3]=='r' && $rop[4]=='M'){
          echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='genero'>Genero</label>

              <select class='custom-select mr-sm-2' name='generoP' id='genero' >
                <option selected value='M'>Masculino</option>
                <option value='F'>Femenino</option>
              </select>
            </div>
            </div>";
          }

          elseif($row[3]=='r' && $rop[4]=='F'){
            echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='genero'>Genero</label>

              <select class='custom-select mr-sm-2' name='generoP' id='genero' >
                <option value='M'>Masculino</option>
                <option selected value='F'>Femenino</option>
              </select>
            </div>
            </div>";
          }  
          elseif($row[3]=='z' && $zap[4]=='F'){
            echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='genero'>Genero</label>

              <select class='custom-select mr-sm-2' name='generoP' id='genero' >
                <option value='M'>Masculino</option>
                <option selected value='F'>Femenino</option>
              </select>
            </div>
            </div>";
          }

          elseif($row[3]=='z' && $zap[4]=='M'){
            echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='genero'>Genero</label>

              <select class='custom-select mr-sm-2' name='generoP' id='genero' >
                <option selected value='M'>Masculino</option>
                <option value='F'>Femenino</option>
              </select>
            </div>
            </div>";

          }
        }
          



        if($row[3]=='r'){
        echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='color'>Color</label>
              <select class='custom-select mr-sm-2' name='colorP' id='color'>";
              
              $marcaActual = $rop[5];
              while($rowc = pg_fetch_row($ejecut2)){
                if($marcaActual == $rowc[1]){
                   echo "<option selected value=". $rowc[0] .">" . $rowc[1] . "</option>";
                }
                else{
                  echo "<option value=". $rowc[0] .">" . $rowc[1] . "</option>";
                }
               
              }
              
              echo "</select>
            </div>
          </div>";
        }
              

        if($row[3]=='h'){
        echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='sector'>Sector</label>
              <select class='custom-select mr-sm-2' name='sectorP' id='sector'>";
              
              $marcaActual = $rop[3];
              while($rows = pg_fetch_row($ejecut3)){
                if($marcaActual == $rows[1]){
                   echo "<option selected value=". $rows[0] .">" . $rows[1] . "</option>";
                }
                else{
                  echo "<option value=". $rows[0] .">" . $rows[1] . "</option>";
                }
               
              }
              
              echo "</select>
            </div>
          </div>";
        }

        if($row[3]=='r'||$row[3]=='z'){
        if($row[3]=='r'){
        echo "<div class='form-group'>
        <label for='talla'>Talla:</label>
        <input type='text' name='tallaP' class='form-control' id='talla' value=". $zap[6]. "></div>";
        }
        if($row[3]=='z'){
          echo "<div class='form-group'>
        <label for='talla'>Talla:</label>
        <input type='text' name='tallaP' class='form-control' id='talla' value=". $rop[6]. "></div>";
        }
      }
      echo "<button type='submit' id='enviarModif' name='contraEm' class='btn btn-primary'>Modificar</button>";
       echo "<div id='resultado'></div>";
          pg_close($conexion);
        
        
  ?>

  </div>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</html>
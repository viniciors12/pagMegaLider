
<!doctype html>
<html lang="en">
  <head>
<div id="formEmpleado">

        <?php 

        $cedula = $_POST["cedula"];
        $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque') or die("Could not connect");

        $sel= "select p.IDpersona, p.primerNombre, p.apellido1,p.apellido2,p.contrasenna
        ,p.tipoUsuario,p.correo, s.monto, tp.tipoPago, s.fechapago, t.telefono from persona p 
        inner join
          salario s on p.idpersona = s.idpersona
        inner join
          tipoPago tp on s.IDTipopago = tp.IDTipopago  
        inner join
          telefonoPersona t on p.idpersona = t.idpersona
        
        where p.idpersona = '$cedula'";

        $ejecutar = pg_query($conexion, $sel);
        $rows= pg_num_rows($ejecutar);

        if($rows>0){

          
          $row = pg_fetch_row($ejecutar);
          
        echo "<div id='formEmpleado'>";
        echo"<div class='form-group'>
        <label for='pwd'>Cédula:</label>
        <input disabled='disabled' type='TEXT' name='idEm' class='form-control' id='cedula' value=" . $row[0]. "></div>";

        echo"<div class='form-group'>
        <label for='nombre'>Nombre:</label>
        <input type='TEXT' name='nombreEm' class='form-control' id='nombre' value=" . $row[1]. "></div>";

        echo"<div class='form-group'>
        <label for='pApellido'>Primero Apellido:</label>
        <input type='TEXT' name='apellidoEm' class='form-control' id='pApellido' value=" . $row[2]. "></div>";

        echo"<div class='form-group'>
        <label for='sApellido'>Segundo Apellido:</label>
        <input type='TEXT' name='sapellidoEm' class='form-control' id='sApellido' value=" . $row[3]. "></div>";

        echo"<div class='form-group'>
        <label for='contra'>Contraseña:</label>
        <input type='password' name='contraEm' class='form-control' id='contra' value=" . $row[4]. "></div>";

        echo"<div class='form-group'>
        <label for='verifContra'>Verificar Contraseña:</label>
        <input type='password' name='verifContraEm' class='form-control' id='verifContra' value=" . $row[4]. "></div>";


        if($row[5]=="A"){
        echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='tipoUsuario'>Tipo de Empleado</label>

              <select class='custom-select mr-sm-2' name='tipoEm' id='tEmpleado' >
                <option selected value='A'>Administrado</option>
                <option value='E'>Empleado</option>
              </select>
            </div>
            </div>";}

        else{

          echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='tipoUsuario'>Tipo de Empleado</label>

              <select class='custom-select mr-sm-2' name='tipoEm' id='tEmpleado' >
                <option value='A'>Administrado</option>
                <option selected value='E'>Empleado</option>
              </select>
            </div>
            </div>";
        }

        echo "<div class='form-group'>
        <label for='correo'>Correo:</label>
        <input type='email' name='correoEm' class='form-control' id='correo' value=" . $row[6]. "></div>";

        echo "<div class='form-group'>
        <label for='salario'>Salario Semanal:</label>
        <input type='TEXT' name='salarioEm' class='form-control' id='salario' value=" . $row[7]. "></div>";

         if($row[5]=='1'){

        echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='tipoPago'>Tipo de pago</label>
              <select class='custom-select mr-sm-2' name='tPagoEm' id='tpago' selected=".$row[8].">
                <option selected value='1'>Colones</option>
                <option value='2'>Dólares</option>
              </select>
            </div>
            </div>";}
        else{echo"<div class='form-row align-items-center'>
            <div class='col-auto my-1'>
              <label class='mr-sm-2' for='tipoPago'>Tipo de pago</label>
              <select class='custom-select mr-sm-2' name='tPagoEm' id='tpago' selected=".$row[8].">
                <option value='2'>Colones</option>
                <option selected value='1'>Dólares</option>
              </select>
            </div>
            </div>";}    

        echo "<div class='form-group'>
        <label for='fPago'>Fecha de pago:</label>
        <input type='date' name='fPagoEm' class='form-control' id='fPago' value=" . $row[9]. "></div>";

        echo "<div class='form-group'>
        <label for='telefono'>Teléfono:</label>
        <input type='TEXT' name='telefonoEm' class='form-control' id='telefono' value=" . $row[10]. "></div>";

          echo "</div>";
            

       echo "<button type='submit' id='enviarModif' name='contraEm' class='btn btn-primary'>Modificar</button>";
       echo "<div id='resultado'></div>";
          pg_close($conexion);
        }
        
  ?>

  </body>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</html>
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel = "stylesheet" href="css/estilos.css">

    <title>Mega Líder</title>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script> 
    $(document).ready(function(){
          
          $("#enviar").click(function(){
            
            var garanty = $("#garantia").val()  
              
            //var cod = $("#codigo").val()
            var price = $("#precio").val()
            var description = $("#descripcion").val()
            var productType = $("#tipoproducto").val()
            var bran = $("#marca").val()
            var sector = $("#sector").val()
            var color = $("#color").val()
            var size = $("#talla").val()
            var genre = $("#genero").val()
            var cant = $("#cantidad").val()
            var empleado = $("#cedula").val()


                    if(!bran){
                      bran = 99;
                    }
                    if(!garanty){
                      garanty = 99
                    }
                    if(!genre){
                      gen = 'M';
                    }
                    if(!sector){
                      sector = 99;
                    }
                    if(!color){
                      color = 99;
                    }
                    if(!size){
                      size = "";
                    }
          
                $.post("InsertaProducto.php",{precioP:price,descripcionP:description,tipoP:productType,marcaP:bran,
                sectorP:sector,colorP:color,garantiaP:garanty,tallaP:size,generoP:genre,cantidad:cant,empl:empleado},function(datos){
                    $("#resultado").html(datos);
              
              console.log(datos);
        
          });

          });

          $("#tablitaElim #a1").click(function(){
        aid();
        $('#InsP').css('visibility', 'visible');
        document.getElementById("color").disabled = true;
        document.getElementById("sector").disabled = true;

        });
          $("#tablitaElim #a2").click(function(){
            aid();
        $('#InsP').css('visibility', 'visible');
        document.getElementById("color").disabled = true;
        document.getElementById("sector").disabled = true;
        document.getElementById("garantia").disabled = true;
        document.getElementById("talla").disabled = true;
        document.getElementById("genero").disabled = true;
        

        });
          $("#tablitaElim #a3").click(function(){
            aid();
        $('#InsP').css('visibility', 'visible');
        document.getElementById("color").disabled = true;
        document.getElementById("sector").disabled = true;
        document.getElementById("marca").disabled = true;
        document.getElementById("talla").disabled = true;
        document.getElementById("genero").disabled = true;



        });
          $("#tablitaElim #a4").click(function(){
            aid();
        $('#InsP').css('visibility', 'visible');
        document.getElementById("sector").disabled = true;
        document.getElementById("garantia").disabled = true;
        

        });
          $("#tablitaElim #a5").click(function(){
            aid();
        $('#InsP').css('visibility', 'visible');
        document.getElementById("color").disabled = true;
        document.getElementById("garantia").disabled = true;
         document.getElementById("talla").disabled = true;
         document.getElementById("genero").disabled = true;
         
        });

          function aid()
          {
          document.getElementById("color").disabled = false;
          document.getElementById("sector").disabled = false;
          document.getElementById("marca").disabled = false;
          document.getElementById("garantia").disabled = false;
          document.getElementById("talla").disabled = false;
          document.getElementById("genero").disabled = false;

          }


    });


    

    
</script>

  </head>
  <body>
    
  <div class="arriba">
      <h1 style="color:#FFFFFF;" class="hola text-center">CADENA DE TIENDAS MEGA <br>LÍDER</br></h1>
      <header>
        <div class="container-fluid">

              <nav class="my-navbar navbar navbar-expand-lg navbar-light  rounded" >
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> 
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <?php
              if($_SESSION['tipoUsuario'] == 'A'){

               echo" <ul class='separador nav nav-pills nav-fill'>
                  <li class='ignore nav-item active'>
                    <a class='nav-link' href='Inicio.php'>Inicio <span class='sr-only'>(current)</span></a>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle dropdown-toggle-color' href='#'' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Consultas
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      <a class='dropdown-item' href='buscarPorCodigo.php'>Buscar por código</a>
                      <a class='dropdown-item' href='ConsGanancia.php'>Ganancias</a>
                      <a class='dropdown-item' href='consGarantias.php'>Garantias</a>
                      <a class='dropdown-item' href='Planilla.php'>Planilla</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Insertar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink' >
                      <a class='dropdown-item' href='InsEmpleado.html'>Empleado</a>

                      <a class='dropdown-item' href='InsInventario.php'>Inventario</a>
                      <a class='dropdown-item' href='InsFactura.php'>Factura</a>
                      <a class='dropdown-item' href='insProducto.php'>Producto</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Eliminar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      <a class='dropdown-item' href='ElimEmpleado.php'>Empleado</a>
                      <a class='dropdown-item' href='ElimProducto.php'>Producto</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Modificar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      <a class='dropdown-item' href='Modificar.php'>Empleado</a>
                      <a class='dropdown-item' href='modifProducto.php'>Producto</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>";
          }

          else{
              echo" <ul class='separador nav nav-pills nav-fill'>
                  <li class='ignore nav-item active'>
                    <a class='nav-link' href='Inicio.php'>Inicio <span class='sr-only'>(current)</span></a>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle dropdown-toggle-color' href='#'' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Consultas
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      <a class='dropdown-item' href='buscarPorCodigo.php'>Buscar por código</a>
                      <a class='dropdown-item' href='ConsGanancia.php'>Ganancias</a>
                      <a class='dropdown-item' href='consGarantias.php'>Garantias</a>
                      <a class='dropdown-item' href='Planilla.php'>Planilla</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Insertar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink' >
                     

                      <a class='dropdown-item' href='InsInventario.php'>Inventario</a>
                      <a class='dropdown-item' href='InsFactura.php'>Factura</a>
                      <a class='dropdown-item' href='insProducto.php'>Producto</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Eliminar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      
                      <a class='dropdown-item' href='ElimProducto.php'>Producto</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Modificar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      
             
                      <a class='dropdown-item' href='modifProducto.php'>Producto</a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>";
          }
          ?> 
        </div>

      </header>

  </div>

      <table class="table table-modif" id="tablitaElim">
      <thead class="thead">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipo de producto</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <a id="a1" href='#InsP'>Zapateria</a></td><td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td> <a id="a2" href='#InsP'>Escolar</a></td><td>
 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td> <a id="a3" href='#InsP'>Muebleria</a></td><td>
  
    </tr>

    <tr>
      <th scope="row">4</th>
      <td> <a id="a4" href='#InsP'>Ropa</a></td><td>
  
    </tr>
    <tr>
      <th scope="row">5</th>
      <td> <a id="a5" href='#InsP'>Hogar</a></td><td>
  
    </tr>
    </tbody>
  </table>  


       <div style="visibility: hidden;" class="mainIns" id="InsP"> 
        <div class="form-group">
          <label for="empleado">Empleado Encargado:</label>
          <?php
          echo "<input type='TEXT' disabled='disabled' name='cedulaE' class='form-control' id='cedula' value=".$_SESSION['usuario'].">";
          ?>
        </div>
        <div class="form-group">
          <label for="precio">Precio:</label>
          <input type="TEXT" name="precioP" class="form-control" id="precio">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <input type="TEXT" name="descripcionP" class="form-control" id="descripcion">
        </div>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <label class="mr-sm-2" for="tipoPago">Tipo de producto</label>
              <select class="custom-select mr-sm-2" name="tipoP" id="tipoproducto">
                <option type="TEXT" value="1">Zapateria</option>
                <option type="TEXT" value="2">Escolar</option>
                <option type="TEXT" value="3">Muebleria</option>
                <option type="TEXT" value="4">Ropa</option>
                <option type="TEXT" value="5">Hogar</option>
              </select>
            </div>
          </div>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <label class="mr-sm-2" for="marca">Marca</label>
              <select class="custom-select mr-sm-2" name="marca" id="marca">
              <?php
              $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque'); 
              $sel= "SELECT * FROM Marca";
              $ejecutar = pg_query($conexion, $sel);
              while($row = pg_fetch_row($ejecutar)){
              echo "<option value=". $row[0] .">" . $row[1] . "</option>";
              }
              ?>
              </select>
            </div>
          </div>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <label class="mr-sm-2" for="sector">Sector</label>
              <select class="custom-select mr-sm-2" name="sectorP" id="sector">
              <?php
              $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque'); 
              $sel= "SELECT * FROM Sector";
              $ejecutar = pg_query($conexion, $sel);
              while($row = pg_fetch_row($ejecutar)){
              echo "<option value=". $row[0] .">" . $row[1] . "</option>";
              }
              ?>
              </select>
            </div>
          </div>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <label class="mr-sm-2" for="color">Color</label>
              <select class="custom-select mr-sm-2" name="colorP" id="color">
              <?php
              $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque'); 
              $sel= "SELECT * FROM Color";
              $ejecutar = pg_query($conexion, $sel);
              while($row = pg_fetch_row($ejecutar)){
              echo "<option value=". $row[0] .">" . $row[1] . "</option>";
              }
              ?>
              </select>
            </div>
          </div>
        <div class="form-group">
          <label for="garantia">Garantía:</label>
          <input type="text" name=garantiaP class="form-control" id="garantia">
        </div>
        
        <div class="form-group">
          <label for="talla">Talla:</label>
          <input type="TEXT" name="tallaP" class="form-control" id="talla">
        </div>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <label class="mr-sm-2" for="genero">Género</label>
              <select class="custom-select mr-sm-2" name="generoP" id="genero">
                <option type="TEXT" value="M">Masculino</option>
                <option type="TEXT" value="F">Femenino</option>
              </select>
            </div>
          </div>
          <div class="form-group">
          <label for="talla">Cantidad:</label>
          <input type="TEXT" name="cant" class="form-control" id="cantidad">
        </div>

        <button type="submit" id="enviar" class="btn btn-primary">Insertar</button>
        <div id="resultado"></div>
      </div>
   
    </div>

  </div>


     
  </body>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</html>
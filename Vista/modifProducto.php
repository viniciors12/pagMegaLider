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

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script> 
    $(document).ready(function(){

      $("#tablita a").click(function(){
                
                var x = $(this).text();

                $.post("modifRowProd.php",{codigo:x},function(datos){

                    $(".mainIns").html(datos);

                    $(".mainIns #enviarModif").on("click", function(){   //puede recibir eventos a botones que aún no existen.
                  
                    var id = $("#codigo").val();
                    var prec = $("#precio").val();
                    var desc = $("#descripcion").val();
                    var mar = $("#marca").val();
                    var garant = $("#garantia").val();
                    var gen = $("#genero").val();
                    var sect = $("#sector").val();
                    var col = $("#color").val();
                    var tal = $("#talla").val();
                    
                    
                    if(!mar){
                      mar = 99;
                    }
                    if(!garant){
                      garant = 99
                    }
                    if(!gen){
                      gen = 'M';
                    }
                    if(!sect){
                      sect = 99;
                    }
                    if(!col){
                      col = 99;
                    }
                    if(!tal){
                      tal = "";
                    }

          
                    $.post("modificarProducto.php",{idp:id,precioP:prec,descripcionP:desc,marcaP:mar,garantiaP:garant,
                    generoP:gen,sectorP:sect,colorP:col,tallaP:tal},function(datos){
                        $("#resultado").html(datos);
                        window.location.reload(false);
              
              console.log(datos);
        
          });

          });

                    console.log(datos);
        
                });

          });

    });


    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
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
                      <a class='dropdown-item' href='ConsGarantias.php'>Garantias</a>
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
                      <a class='dropdown-item' href='ConsGarantias.php'>Garantias</a>
                      <a class='dropdown-item' href='Planilla.php'>Planilla</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Insertar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink' >
                     

                      <a class='dropdown-item' href='InsInventario.php'>Inventario</a>
                      <a class='dropdown-item' href='InsFactura.php>Factura</a>
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
    <div class="container mt-3" id=cajita>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
     <table class="table table-modif" id="tablita">
      <thead class="thead">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Código</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody id="myTable">


    <?php 

    $conexion = pg_connect('host=localhost user=postgres password=123 dbname=reque') or die("Could not connect");

    $sel= "select idproducto, precion, descripcion from producto";

    $ejecutar = pg_query($conexion, $sel);
    $rows= pg_num_rows($ejecutar);


    if($rows>0){
      $cont = 1;
      while($row = pg_fetch_row($ejecutar)){

        echo"<tr><td>".$cont."</td><td> <a href='#'>$row[0]</a></td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
        $cont++;
      }
      echo "</tbody>";

      pg_close($conexion);
    }


    ?>
  </tbody>
  </table>
      
  </div>    
       <div class="mainIns" id="mainI" name="mainI"> 
        
        
    

      

       </div>
    


  


     
  </body>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</html>
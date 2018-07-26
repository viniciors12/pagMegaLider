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
  </head>
  <body>

    


  <div class="arriba">
   
    <div class="logout">
   <a href='Login.html'>Log out</a>
   </div>


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
                    <a class='nav-link' href='#'>Inicio <span class='sr-only'>(current)</span></a>
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
                    <a class='nav-link' href='#'>Inicio <span class='sr-only'>(current)</span></a>
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
                      <a class='dropdown-item' href='InsFactura.php'>Factura</a>
                      <a class='dropdown-item' href='insProducto.php'>Producto</a>
                    </div>
                  </li>
                  <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                      Eliminar
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      
                      <a class='dropdown-item' href='elimProducto.php'>Producto</a>
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
        
        
  

    <section class="main"> 
        <section class="articles">
          
          <article>
            <h2>Nuestra Historia</h2>
            <p>MEGA LÍDER  ·  MONDAY, FEBRUARY 26, 2018</p>

            <p>La CADENA DE TIENDAS MEGA LIDER, es una empresa que nace en San Carlos con más de 20 años de estar en el mercado, surge como una propuesta a la necesidad de que la población pueda adquirir productos aún muy bajo precio, manteniendo la calidad y la moda del momento.</p>
          </article>

          <article>
            <p>La CADENA DE TIENDAS MEGA LIDER se dedica a la distribución de productos al detalle para el hogar, ropa de dama, ropa de caballero, ropa de niño (a), ropa íntima, calzado, cosméticos, plástico, vidrio, juguetes, librería, muebles y otros. Consideramos al factor humano como el elemento principal de la empresa, y de ahí que apoyamos a todos nuestros clientes y colaboradores como una gran familia.</p>

          </article>

        </section>

        <footer>
          <p>MEGA LÍDER SA - 2018</p>
        </footer>

    </section>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
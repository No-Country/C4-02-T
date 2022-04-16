<?php 

require_once "conexion.php";



?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/electric-guitar.png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <title>GuitarView - home</title>
  </head>
  <body>
  <a name="inicio"></a>
  <div class="container-fluid">
    <!-- header -->
            <!-- navbar -->
            <header class="row borde_nav">
              <div class="col">
                <a href="index.php"><img src="img/guitarview_SF.png" alt="logo" width="475em"></a>
              </div>
              <nav class="col">
                <ul>
                  <li><a href="index.php" class="col col-md-12">Home</a></li>
                  <li><a href="caracteristicas.php" class="col col-md-12">Tipos de Guitarras</a></li>
                </ul>
              </nav>
            </header>
            <!-- fin navbar -->

    
    <!-- portada - cabecera -->
    <img src="img/cabecera.jpg" class="img-fluid rounded mx-auto d-block" alt="portada" width="100%">
    
    <div class="container-fluid col col-12 col-md-12 text-center">
      
        <div class="container">
          <br><h1 style="color: #900C3F;">Listado de Guitarras Mejor Rankeadas</h1>          
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col-"></th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Cuerdas</th>
                <th scope="col">Puente</th>
                <th scope="col">Trastes</th>
                <th scope="col">Puntuacion</th>  
                
              </tr>
            </thead>
            <tbody>
              <?php

                $query = mysqli_query($conn,"CALL top_5();");
				        mysqli_close($conn);

                $result = mysqli_num_rows($query);

                if($result > 0)
                {
                  while($datos = mysqli_fetch_array($query))
                  {

                    $foto = 'img/img_guitarras/'.$datos['imagen'];
                  ?>
                  <tr >
                  
                    <input type="hidden" value="<?php echo $datos['id']; ?>">      
                    <td class="col col-2"> <!-- modifical el 2 para redimensionar la imagen de 1 a 12  -->
                      <div class="container-fluid">
                        <img src="<?php echo $foto; ?>" class="col col-12" alt="">
                      </div>
                    </td>          
                    <td><?php echo $datos['marca']; ?></td>
                    <td><?php echo $datos['modelo']; ?></td>
                    <td><?php echo $datos['cuerdas']; ?></td>
                    <td><?php echo $datos['puente']; ?></td>
                    <td><?php echo $datos['trastes']; ?></td>
                    <td><?php echo $datos['puntuacion']; ?></td>
                  </tr>
                  <?php 
                  
                  }
                }  ?>

            </tbody>
          </table>
        </div>
      
    </div>

    
    <footer class="bg-dark text-center text-white borde_footer">
      
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <a href="#inicio">
          <p class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-outline-secondary">Volver arriba</button>
          </p>
        </a>
      </section>
      <!-- Section: CTA -->
    </div>

      <!-- Copyright -->
      <div class="text-center p-3 text_footer" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright: noCountry/C4-02-T
      </div>
      <!-- Copyright -->
    </footer>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/js_.js"></script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
</html>
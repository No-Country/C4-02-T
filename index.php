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
    
    <div class="container col col-12 col-md-12 text-center">
      
        <div class="container">
          <br>
          <div class="container d-inline" >
            <h1 style="color: #900C3F;">Listado de Guitarras </h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Comparar Guitarras
            </button>
          </div>
                     
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col-"></th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Puntuacion</th>  
                
              </tr>
            </thead>
            <tbody>
              <?php
                
                $query = mysqli_query($conn,"SELECT * FROM guitarras;");				        

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
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/js_.js"></script>

    </div>   

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>          
          <div class="modal-body">
            <div class="container">
              <div class="row col-6">                
                  <div class="row">
                    <select class="form-select d-block" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>             
              </div>
              <div class="col-6 ">.col-6 </div>
            </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
<?php 

require_once "conexion.php";



?>





<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <title>GuitarView - home</title>
  </head>
  <body>
  <a name="inicio"></a>
    <!-- header -->
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg grid borde_nav">
                <div class="container-fluid">
                    <img src="img/guitarview350.png" alt="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary" href="caracteristicas.php">Tipos de guitarra</a>
                            </li>
                                                        
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- fin navbar -->
    
    <!-- portada - cabecera -->
    <img src="img/cabecera.jpg" class="img-fluid rounded mx-auto d-block" alt="portada" width="100%">
    
    <div class="container-fluid col col-12 text-center">
      <div class="container  ">
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
              
              
              <tr >      
                <td class="col col-2"> <!-- modifical el 2 para redimensionar la imagen de 1 a 12  -->
                  <div class="container-fluid">
                    <img src="img/YAMAHA/Yamaha-PAC611VFM-horizontal.png" class="col col-12" alt="">
                  </div>
                </td>          
                <td >Yamaha</td>
                <td>PAC611VFM</td>
                <td>4</td>
                <td>Madera</td>
                <td>24</td>
                <td>8.5</td>
              </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>

<<<<<<< Updated upstream
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
        © 2022 Copyright:
        <a class="text_footer" href="#">noCountry/C4-02-T</a>
      </div>
      <!-- Copyright -->
    </footer>
=======
>>>>>>> Stashed changes

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
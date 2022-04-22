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
            <button type="button" onclick="listado_modal();" id="boton_modal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin: 3em 0;">
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
                <th scope="col">Opcion</th>  
                
              </tr>
            </thead>
            <tbody>
              <?php
                
                $query = mysqli_query($conn,"SELECT * FROM guitarras;");				        

                $result = mysqli_num_rows($query);
                $listado_guitarras = '<option >Seleccione Guitarra</option>';
                
                if($result > 0)
                {
                  while($datos = mysqli_fetch_array($query))
                  {

                    $foto = 'img/img_guitarras/'.$datos['imagen'];
                    $id_guitarra = $datos['id'];
                    $listado_guitarras .= "<option  value=".$datos['id']." >".$datos['marca']." - ".$datos['modelo']."</option>";

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
                    <td><a class="btn btn-primary" target="_blank" href='info_guitar.php?id_guitarra=<?php echo $id_guitarra; ?>'>Mas Información</a></td>
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
    <script src="js/app.js"></script>

    </div>   

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Elige las guitarras a comparar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>          
          <div class="modal-body">
            <div class="container">
            <div class="row">

              <div class="col-6"> <!-- Primer Tarjeta -->
                <div class="cotainer">
                  <select class="form-control" id="guitarra_1">                  
                    <?php echo $listado_guitarras; ?>
                  </select> <br>
                </div>  
                <div>
                  
                <div>
                    <div class="card col" >
                      <img src="img/8cuerdas.jpg" id="img_guitarra_1" class="card-img-top" alt="...">
                      <div class="card-body">
                      <table class="table">
                    
                        <tbody>
                          <tr>
                            <input type="hidden" value="0" id="id_guitarra_1">
                            <td id="marca_guitarra_1">Marca: gibson</td>
                          </tr>
                          <tr>
                            <td id="modelo_guitarra_1">Modelo: arx</td>
                          </tr>
                          <tr>
                            <td id="cuerdas_guitarra_1">Cantidad Cuerdas: 6</td>
                          </tr>
                          <tr>
                            <td id="puente_guitarra_1">Puente: isdnfiosadnfsfsdfdsfsdfsdafsd ff</td>
                          </tr>
                          <tr>
                            <td id="trastes_guitarra_1">Trastes: fasdfsdfsadfdsfasfsdfdasf </td>
                          </tr>
                          <tr>
                            <td id="escala_guitarra_1">Escala: 43</td>
                          </tr>
                          <tr>
                            <td id="puntuacion_guitarra_1">Puntuacion: 87 </td>
                          </tr>
                          <tr>
                            <td id="precio_guitarra_1">Precio: $1684357</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-6"> <!-- Segunda Tarjeta -->
                <div class="cotainer">
                    <select class="form-control" id="guitarra_2">                      
                      <?php echo $listado_guitarras; ?>
                    </select> <br>                 
                </div>
                  <div>
                    <div class="card col"  >
                      <img src="img/8cuerdas.jpg" id="img_guitarra_2" class="card-img-top" alt="...">
                      <div class="card-body">
                      <table class="table">
                          <tbody>
                            <tr>
                              <input type="hidden" value="0" id="id_guitarra_2">
                              <td id="marca_guitarra_2">Marca: gibson</td>
                            </tr>
                            <tr>
                              <td id="modelo_guitarra_2">Modelo: arx</td>
                            </tr>
                            <tr>
                              <td id="cuerdas_guitarra_2">Cantidad Cuerdas: 6</td>
                            </tr>
                            <tr>
                              <td id="puente_guitarra_2">Puente: isdnfiosadnfsfsdfdsfsdfsdafsd ff</td>
                            </tr>
                            <tr>
                              <td id="trastes_guitarra_2">Trastes: fasdfsdfsadfdsfasfsdfdasf </td>
                            </tr>
                            <tr>
                              <td id="escala_guitarra_2">Escala: 43</td>
                            </tr>
                            <tr>
                              <td id="puntuacion_guitarra_2">Puntuacion: 87 </td>
                            </tr>
                            <tr>
                              <td id="precio_guitarra_2">Precio: $1684357</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Comparar</button>
          </div>
                  </div>
              </div>
            </div>
            </div>
            
          </div>
          
          
        </div>
      </div>
    </div>

    <script>      
      document.querySelector('#guitarra_1').addEventListener('change', event => {
        
        // console.log(event.target.value);


        
        fetch('app.php?id_guitarra='+event.target.value)
        .then(response => {
          if(!response.ok){
            throw new Error('la respuesta fue erronea');
          }
          return response.json();
        })
        .then(datos => {
          //let html = '<option  selected>Seleccione Guitarra</option>';

          console.log(datos);
          //console.log(datos.id)

          document.getElementById("marca_guitarra_1").innerHTML = "Marca: "+datos.marca;
          document.getElementById("id_guitarra_1").value = datos.id;
          document.getElementById("modelo_guitarra_1").innerHTML = "Modelo: "+datos.modelo;
          document.getElementById("cuerdas_guitarra_1").innerHTML = "Cantidad Cuerdas: "+datos.cuerdas;
          document.getElementById("puente_guitarra_1").innerHTML = "Puente: "+datos.puente;
          document.getElementById("trastes_guitarra_1").innerHTML = "Trastes: "+datos.trastes;
          document.getElementById("escala_guitarra_1").innerHTML = "Escala: "+datos.escala;
          document.getElementById("puntuacion_guitarra_1").innerHTML = "Puntuación: "+datos.puntuacion;
          document.getElementById("precio_guitarra_1").innerHTML = "Precio: $ "+datos.precio;
          document.getElementById("img_guitarra_1").src="img/img_guitarras/"+datos.imagen;
          /*
          if(datos.data.length > 0){
            for(let i=0; i < datos.data.length; i++){
              html += `<option  value="${datos.data[i].id}" >${datos.data[i].marca} - ${datos.data[i].modelo} </option>`;
            }
          } */
        })
        .catch(error => {
          console.error('ocurrio un error'+error);
        }) 

      });

      document.querySelector('#guitarra_2').addEventListener('change', event => {
        
        // console.log(event.target.value);
        
        fetch('app.php?id_guitarra='+event.target.value)
        .then(response => {
          if(!response.ok){
            throw new Error('la respuesta fue erronea');
          }
          return response.json();
        })
        .then(datos => {
          //let html = '<option  selected>Seleccione Guitarra</option>';

          console.log(datos);
          //console.log(datos.id)

          document.getElementById("marca_guitarra_2").innerHTML = "Marca: "+datos.marca;
          document.getElementById("id_guitarra_2").value = datos.id;
          document.getElementById("modelo_guitarra_2").innerHTML = "Modelo: "+datos.modelo;
          document.getElementById("cuerdas_guitarra_2").innerHTML = "Cantidad Cuerdas: "+datos.cuerdas;
          document.getElementById("puente_guitarra_2").innerHTML = "Puente: "+datos.puente;
          document.getElementById("trastes_guitarra_2").innerHTML = "Trastes: "+datos.trastes;
          document.getElementById("escala_guitarra_2").innerHTML = "Escala: "+datos.escala;
          document.getElementById("puntuacion_guitarra_2").innerHTML = "Puntuación: "+datos.puntuacion;
          document.getElementById("precio_guitarra_2").innerHTML = "Precio: $ "+datos.precio;
          document.getElementById("img_guitarra_2").src="img/img_guitarras/"+datos.imagen;
          /*
          if(datos.data.length > 0){
            for(let i=0; i < datos.data.length; i++){
              html += `<option  value="${datos.data[i].id}" >${datos.data[i].marca} - ${datos.data[i].modelo} </option>`;
            }
          } */
        })
        .catch(error => {
          console.error('ocurrio un error'+error);
        }) 

      });

    </script>


  </body>
</html>
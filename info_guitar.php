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

    <title>GuitarView - Info</title>
  </head>
  <body>
  <a name="inicio"></a>
  <div class="container-fluid">

    
    <div class="container col col-12 col-md-10 col-sm-10 col-lg-7 text-center">
      
        <div class="container">
          <br>
          <div class="container d-inline" >
            <h1 style="color: #900C3F;">Informacion de Guitarra</h1>
            
          </div>
                     
          <table class="table table-dark">
            <thead>
              <tr>
                <img src="" alt="">
              </tr>
            </thead>
            <tbody>
              <?php
                $id=$_GET['id_guitarra'];

                $query = mysqli_query($conn,"SELECT * FROM guitarras WHERE id='".$id."';");				        

                $result = mysqli_num_rows($query);

                if($result > 0)
                {
                  while($datos = mysqli_fetch_array($query))
                  {

                    $foto = 'img/img_guitarras/'.$datos['imagen'];
                    $id_guitarra = $datos['id'];
                  ?>
                  <tr >
                  
                    <input type="hidden" value="<?php echo $datos['id']; ?>">      
                    <td class="col col-2"> <!-- modifical el 2 para redimensionar la imagen de 1 a 12  -->
                      <div class="container-fluid">
                        <img src="<?php echo $foto; ?>" class="col col-12" alt="">
                      </div>
                    </td>          
                    <tr><td><?php echo "Marca: ".$datos['marca']; ?></td></tr>
                    <tr><td><?php echo "Modelo: ".$datos['modelo']; ?></td></tr>
                    <tr><td><?php echo "Cantidad de cuerdas: ".$datos['cuerdas']; ?></td></tr>
                    <tr><td><?php echo "Puente: ".$datos['puente']; ?></td></tr>
                    <tr><td><?php echo "Cantidad de trastes: ".$datos['trastes']; ?></td></tr>
                    <tr><td><?php echo "Escala: ".$datos['escala']; ?></td></tr>
                    <tr><td><?php echo "Precio: USD$".$datos['precio']; ?></td></tr>
                    <tr><td><?php echo "Puntuación: ".$datos['puntuacion']; ?></td></tr>
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

              <div class="col-6">
                <div class="cotainer">
                  <select class="form-control" id="guitarra_1">
                    
                    <option  value="1" >Fender</option>
                    <option value="2">strato</option>
                    <option value="3">yamaha</option>
                  </select> <br>
                </div>  
                <div>
                  
                <div>
                    <div class="card col" >
                      <img src="img/8cuerdas.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                      <table class="table">
                    
                        <tbody>
                        <tr>
                            <td>modelo: arx</td>
                          </tr>
                          <tr>
                            <td>marca: gibson</td>
                          </tr>
                          <tr>
                            <td>precio: 1684357</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-6">
                <div class="cotainer">
                    <select class="form-control">
                      <option>Segunda guitarra</option>
                      <option>Segunda guitarra</option>
                      <option>Segunda guitarra</option>
                      <option>Segunda guitarra</option>

                      
                    </select> <br>                 
                </div>
                  <div>
                    <div class="card col" >
                      <img src="img/8cuerdas.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                      <table class="table">
                    
                        <tbody>
                          <tr>
                            <td>modelo: arx</td>
                          </tr>
                          <tr>
                            <td>marca: gibson</td>
                          </tr>
                          <tr>
                            <td>precio: 1684357</td>
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
        
        fetch('app.php?id_guitarra='+event.target.value)
        .then(response => {
          if(!response.ok){
            throw new Error('la respuesta fue erronea');
          }
          return response.json();
        })
        .then(datos => {
          let html = '<option  selected>Seleccione Guitarra</option>';

          if(datos.data.length > 0){
            for(let i=0; i < datos.data.length; i++){
              html += `<option  value="${datos.data[i].id}" >${datos.data[i].marca} - ${datos.data[i].modelo} </option>`;
            }
          }
        })
        .catch(error => {
          console.error('ocurrio un error');
        })

      });

    </script>


  </body>
</html>
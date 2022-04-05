<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
  

    <title>GuitarView</title>
  </head>
  <body>
    <!-- header -->
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg grid">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/guitarview350.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    </button>

                    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item">
                                <input class="btn btn-outline-secondary" type="button" value="Saber mas sobre guitarras" onclick="search()">
                            </li>
                                                        
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- fin navbar -->
    
    <!-- slidebar -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/01.jpg" class="d-block w-100" alt="img_slider">
        </div>
        <div class="carousel-item">
          <img src="img/02.jpg" class="d-block w-100" alt="img_slider">
        </div>
        <div class="carousel-item">
          <img src="img/03.jpg" class="d-block w-100" alt="img_slider">
        </div>
        <div class="carousel-item">
          <img src="img/04.jpg" class="d-block w-100" alt="img_slider">
        </div>
        <div class="carousel-item">
          <img src="img/05.jpg" class="d-block w-100" alt="img_slider">
        </div>
      </div>
    </div>
    
    <!-- cards -->
    <div  class="row card_comparacion d-flex justify-content-center">
      
    <div class="card col col-6" style="width: 25rem;">
      <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fbp2.blogger.com%2F_0zKK5jSvkHY%2FSD6u8k7gPoI%2FAAAAAAAAAWE%2FibpmBgvm5zI%2Fw1200-h630-p-k-no-nu%2Fstratocaster-25-aniversario.jpg&f=1&nofb=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fender Stratocaster 25 Aniversario</h5>
        <p class="card-text">Este modelo de 1979, que conmemora los 25 años de producción de la Strato, lleva una inscripción de aniversario en el cuerpo y clavijas de lujo. </p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Cuerdas: 6</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
      </ul>
      <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <div class="card col col-6" style="width: 25rem;">
      <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F-Tqqn3dgYfKw%2FUGaNMNVUbDI%2FAAAAAAAAAB8%2Fg8G8JnEx_4Q%2Fs400%2FGibson-ES0335-1964.jpeg&f=1&nofb=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gibson ES0335 belongs to Eric Clapton</h5>
        <p class="card-text">En 1964 con precios de $ 847.500. Eric Clapton usa esta guitarra desde 1964, pero rara vez se usa después de que la guitarra se ofrece a un precio de $ 847,500 en una subasta. Este es el precio más alto jamás subastado en una guitarra Gibson en ese momento. </p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Cuerdas: 6</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
      </ul>
      <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
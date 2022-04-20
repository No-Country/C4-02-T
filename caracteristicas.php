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

  <title>GuitarView - Tipos de guitarras</title>
</head>

<body>
<a name="inicio"></a>
  <div class="container-fluid">
    <!-- header -->
    <!-- navbar -->
    <header class="row">
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

    <section class="back_nav borde_nav"></section>
    <!-- portada - cabecera -->

    <section class="navGuitar borde_nav">
      <ul class="row nav_">
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('cuerpo', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Tipos de cuerpo</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('stratocaster', 'cuerpo', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Stratocaster</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('telecaster', 'stratocaster', 'cuerpo', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Telecaster</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('superStrat', 'stratocaster', 'telecaster', 'cuerpo', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Super Strat</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('lesPaul', 'stratocaster', 'telecaster', 'superStrat', 'cuerpo', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Les Paul</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('sg', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'cuerpo', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">SG</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('flayingV', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'cuerpo', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Flying V</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('fenderJaguar', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'cuerpo','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Fender Jaguar</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('gibsonExplorer', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar', 'cuerpo', 'gibsonFirebirds', '7_8cuerdas', 'dobleMastil')">Gibson Explorer</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('gibsonFirebirds', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'cuerpo', '7_8cuerdas', 'dobleMastil')">Gibson Firebird</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('7_8cuerdas', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', 'cuerpo', 'dobleMastil')">7 y 8 cuerdas</a></li>
        <li class="col-sm-12 col-md-3 col-xl-2 col-xxl" ><a href="#pestaña"
              onclick="mostrarOcultar('dobleMastil', 'stratocaster', 'telecaster', 'superStrat', 'lesPaul', 'sg', 'flayingV', 'fenderJaguar','gibsonExplorer', 'gibsonFirebirds', '7_8cuerdas', 'cuerpo' )">Doble mastil</a></li>
      </ul>
      </section>



    <div id="cuerpo" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h2 class="text_guitarasH">Guitarra de cuerpo sólido</h2>
        <p class="text_guitaras">
          Son guitarras hechas de una o varias pieza sólida de madera. Como regla general, los instrumentos de cuerpo
          sólido suelen tener más sustain y son más resistentes a la retroalimentación que las guitarras semi-huecas o
          aquellas totalmente huecas.
        </p>
        <img src="img/guitarra_solido.jpg" width="100%">
        <hr>
        <h2 class="text_guitarasH">Guitarra de cuerpo semi-hueco</h2>
        <p class="text_guitaras">
          La guitarra de cuerpo semi-hueco se basa en tener un «bloque de tono» que recorre el centro del cuerpo del
          instrumento. Este tipo de construcción proporciona la resonancia y el tono de los instrumentos totalmente
          huecos (célebres en el jazz), mientras que proporciona una resistencia a la retroalimentación que permite que
          la guitarra y los amplificadores se utilicen a un volumen más alto.<br>
          Mientras que estas guitarras son conocidas por su cálido sonido de madera, también cabe resaltar que son
          capaces de ser usadas en casi cualquier género que no requiera grandes cantidades de ganancia, lo cual es
          propenso a la retroalimentación.
        </p>
        <img src="img/guitarra_semiHueco.jpeg" width="100%">
        <hr>
        <h2 class="text_guitarasH">Guitarra de cuerpo hueco</h2>
        <p class="text_guitaras">
          Una guitarra eléctrica de cuerpo totalmente hueco es, en su gran mayoría de casos, una obra de arte muy
          trabajada. Estos instrumentos son algo así como un viaje al pasado, hacia los días de los instrumentos
          acústicos hechos a mano de antaño. Los arcos y respaldos tallados a mano están diseñados para aprovechar los
          detalles acústicos puros, como la resonancia y el tono, mientras que el aspecto eléctrico permite que el
          guitarrista se pueda amplificar.<br>
          Las verdaderas guitarras de cuerpo hueco suenan muy similares a las guitarras semi-huecas, con la principal
          diferencia de que hay una mayor presencia de tono acústico. También tienen una tendencia a retroalimentar más
          que los instrumentos semi-huecos, lo que los convierte en un mal ajuste para géneros que requieren altos
          niveles de ganancia. A diferencia de las guitarras semi-huecas, las guitarras huecas abarcan dos estilos
          principales de cuerpo: el estilo ES-335 y el estilo jazz box.
        </p>
        <img src="img/cuerpoHueco.jpg" class="img-fluid rounded mx-auto d-block container-md" alt="guitar" width="100%">
      </div>

    </div>
    <div id="stratocaster" class="container-fluid  padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">Stratocaster</h4>
        <p class="text_guitaras">
          Esta guitarra fue lanzada al mercado en 1954 por Fender y es el modelo más ampliamente reconocido de guitarra
          eléctrica. La Stratocaster conocida simplemente como “strato” es una guitarra diversa, y ha sido utilizada en
          una gran variedad de géneros musicales.<br>
          Generalmente cuenta con un trémolo: un dispositivo que permite cambiar el tono de una guitarra moviendo el
          brazo hacia arriba (tono de elevación) o hacia abajo (tono de bajada). Sin embargo, este tipo de tremolo
          tiende a desentonar la guitarra cuando se usa.
        </p>
        <img src="img/stratocaster.jpeg" class="img-fluid rounded mx-auto d-block container-md"
          alt="https://www.pexels.com/es-es/@reneasmussen" width="100%">
      </div>
    </div>
    <div id="telecaster" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">Telecaster</h4>
        <p class="text_guitaras">
          Si, por un lado, la Stratocaster ganó en popularidad por su atractivo Rock’n Roll, entonces la Telecaster
          vendría a ser la versión Country. De hecho, esta guitarra se introdujo antes de la Stratocaster, y
          originalmente se la conocía como la Broadcaster.<br>
          La Telecaster tiene un solo corte, lo que facilita su identificación. Más allá del Country, la Telecaster es
          en realidad una guitarra bastante versátil. Por ejemplo, tanto Kurt Cobain como Jack White usaron una
          Telecaster en el estudio.
        </p>
        <img src="img/telecaster.jpeg" class="img-fluid rounded mx-auto d-block container-md"
          alt="https://www.pexels.com/es-es/@andrej-zeman-1340376" width="100%">
      </div>
    </div>
    <div id="superStrat" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">Super Strat</h4>
        <p class="text_guitaras">
          Tanto la Stratocaster como la Telecaster fueron creadas pensando en piezas modulares, de modo que si alguna
          pieza se dañaba irreparablemente, podía ser reemplazada fácilmente. Marcas como Jackson, Charvel e Ibanez
          tomaron las modificaciones que artistas como Eddie Van Halen y Steve Vai hicieron a sus instrumentos y las
          usaron para crear lo que ahora conocemos como la Super Strat.<br>
          Básicamente, la única similitud que esta guitarra tiene con la Stratocaster original es el estilo de cuerpo.
          Las pastillas usadas generalmente en las Super Strats son de una salida más alta (más distorsion) lo que las
          hace más adecuadas para el metal y el hard rock. Las Super Strats también tienen comúnmente trémolos de Floyd
          Rose, que permiten un gran rango de movimiento.
        </p>
        <img src="img/superStrat.jpg" class="img-fluid rounded mx-auto d-block container-md"
          alt="https://www.pexels.com/es-es/@pixabay" width="100%">
      </div>
    </div>
    <div id="lesPaul" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">Les Paul</h4>
        <p class="text_guitaras">
          Patentada por Gibson y asociada al rock clásico, la Les Paul hace honor a su reputación como una auténtica
          máquina del rock ‘n’ roll . Sin embargo, no olvidemos que la guitarra es realmente capaz de mucho más. Una
          característica de las Les Paul que pasa desapercibida demasiadas veces es que tiene un sonido limpio precioso.
          Como la Stratocaster, es difícil decir que la Les Paul tiene un timbre único que defina el instrumento. Sin
          embargo, su respuesta equilibrada y clara de gama alta la convierte en una buena opción para el rock y algunas
          variantes de jazz. También tiene más sustain en comparación con las guitarras anteriores.<br>
          Esta guitarra es adecuada para casi todos los géneros musicales con la excepción del country. Ha sido
          utilizada en jazz, metal, R&B, innumerables variedades de rock, e incluso punk.
        </p>
        <img src="img/lesPaul.jpeg" class="img-fluid rounded mx-auto d-block container-md"
          alt="https://www.pexels.com/es-es/@reneasmussen" width="100%">
      </div>
    </div>
    <div id="sg" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">SG</h4>
        <p class="text_guitaras">
          Su nombre significa "Solid Guitar" y al igual que todas las ofertas de la marca Gibson, no sólo es un
          instrumento sólido sino también uno muy famoso en todo el mundo. Hay muchas similitudes entre la SG y la Les
          Paul, como los detalles visuales, desde los mástiles y los cabezales atados hasta sus incrustaciones
          trapezoidales y de bloque. Ambos incluyen perillas de volumen y tono separadas para cada una de las dos
          humbuckers, que pueden cambiarse o utilizarse junto con el interruptor de conmutación de 3 vías.<br>
          Algunos de los aspectos diferenciales de la SG incluyen su cuerpo de doble corte mucho más delgado que ofrece
          a los guitarristas un acceso facilitado a los trastes más altos. La SG es también significativamente más
          ligera que una Les Paul y fue la preferida de muchos músicos que buscaban más confort para sus espaldas.
        </p>
        <img src="img/sg.jpg" class="img-fluid rounded mx-auto d-block container-md"
          alt="https://www.pexels.com/es-es/@dmitry-demidov-515774" width="100%">
      </div>
    </div>
    <div id="flayingV" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">Flying V</h4>
        <p class="text_guitaras">
          Esta guitarra de la marca Gibson se caracteriza por su forma de V invertida o de flecha. Además es una
          guitarra muy popular entre guitarristas de gustos extravagantes y llamativos.<br>
          Debido a su aspecto seductor y su estilo verdaderamente imponente es muy imitada por otras marcas. Ya que
          incluso ha sido modificada incontables veces por la competencia de la marca Gibson.
        </p>
        <img src="img/flayingV.jpg" class="img-fluid rounded mx-auto d-block container-md"
          alt="http://whatdoyouwanthere.blogspot.com/2010/04/i-wanna-rock.html" width="100%">
      </div>
    </div>
    <div id="fenderJaguar" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">Fender Jaguar</h4>
        <p class="text_guitaras">
          La Fender Jaguar no empezó con muy buen pie. Aunque ganó algo de popularidad entre los músicos más "surferos",
          Fender decidió retirarla por falta de ventas.
          Y de repente, con el nacimiento del grunge y el rock alternativo a principios de los 90, la Jaguar se
          convierte en uno de los modelos más buscados gracias a iconos como Kurt Cobain.<br>
          Con sus curiosas formas curvadas, el diseño del cuerpo era un soplo de aire fresco en los 60. Además, una
          escala más corta y solo 22 trastes, convertían el mástil en un disfrute absoluto por su comodidad.
          Por supuesto, no nos olvidamos del control independiente para cada una de las pastillas, dando mucha
          versatilidad de sonido rítmico y solista.
        </p>
        <img src="img/fenderJaguar.jpg" class="img-fluid rounded mx-auto d-block container-md" alt="Fjaguar"
          width="100%">
      </div>
    </div>
    <div id="gibsonExplorer" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h4 class="text_guitarasH">Gibson Explorer</h4>
        <p class="text_guitaras">
          Casi la podemos considerar hermana de la Flying V. En su afán por modernizar la guitarra eléctrica, Gibson
          diseñó la clásica Explorer en 1958.
          Este tipo de guitarra tiene en común con su hermana la facilidad de acceder a los trastes superiores y las
          pastillas humbucker que le dan un sonido grueso y potente.<br>
          Esta guitarra es muy reconocible dentro de la comunidad heavy (sobre todo por Metallica) pero también se ha
          usado en otros estilos, siendo el más famoso Allen Collins de Lynyrd Skynyrd con su sonido auténtico
          americano.
        </p>
        <img src="img/gibsonExplorer.jpg" class="img-fluid rounded mx-auto d-block container-md"
          alt="http://whatdoyouwanthere.blogspot.com/2010/04/i-wanna-rock.html" width="100%">
      </div>
    </div>
    <div id="gibsonFirebirds" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h2 class="text_guitarasH">Gibson Firebird</h2>
        <p class="text_guitaras">
          El origen de la Gibson FIREBIRD data de principios de los años 60, cuando el famoso diseñador de automóviles
          Raymond Dietrich recibe el encargo por parte de Gibson de diseñar un nuevo modelo de guitarra. Dietriech se
          inspiró en los alerones de las partes traseras característicos de los autos de los años 50, y en las líneas
          del modelo Explorer de Gibson para diseñar el cuerpo de la nueva guitarra. En cierto modo las formas son
          similares a una Explorer, pero con las líneas más suavizadas y redondeadas.<br>
          Al nuevo modelo se le llamó Firebird (pájaro de fuego) o popularmente como Reverse Firebird, por tener a
          diferencia de los modelos clásicos, la protuberancia más amplia en la parte inferior del cuerpo en lugar de
          tenerla en la superior.
        </p>
        <img src="img/gibsonFirebird.jpg" class="img-fluid rounded mx-auto d-block container-md" alt="firebird"
          width="100%">
      </div>
    </div>
    <div id="7_8cuerdas" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h2 class="text_guitarasH">7 cuerdas</h2>
        <p class="text_guitaras">
          Pero tuvieron que pasar 60 años para que una guitarra de siete cuerdas llegara a ser realmente popular. En
          1990 Steve Vai en colaboración con Ibanez desarrollaron la Ibanez Universe. La primera guitarra eléctrica de
          siete cuerdas fabricada en serie, para deleite de los guitarristas amantes de los géneros más duros del
          Rock.<br>
          Con el paso del tiempo también otros fabricantes quisieron formar parte en la nueva tendencia lanzando a toda
          prisa sus propias creaciones. Disponiendo de sus propios modelos de guitarras de 7 cuerdas un sinfín de marcas
          como PRS, BC Rich, Dean, Epiphone, ESP, Jackson, o Schecter entre muchos otros.
          Aportándoles la guitarra de siete cuerdas una clara rotundidad y contundencia en el sonido al aportar una
          cuerda más hacia graves, sin comprometer las frecuencias más altas o agudos, disponiendo al mismo tiempo de la
          definición en los solos de una guitarra estándar de seis cuerdas.
        </p>
        <img src="img/7cuerdas.jpg" class="img-fluid rounded mx-auto d-block container-md" alt="7cuerdas" width="100%">
        <hr>

        <h2 class="text_guitarasH">8 cuerdas</h2>
        <p class="text_guitaras">
          Las guitarras de 7 y 8 cuerdas, se han vuelto muy populares entre los músicos modernos, para desarrollar
          generalmente géneros derivados del Metal. Conocidas como guitarras eléctricas de Rango Extendido.<br>
          Aportando este instrumento un extra de frecuencias bajas, con las que se consiguen tonos más profundos y
          oscuros muy apreciados en el desarrollo de estos géneros musicales. Disponiendo este instrumento de dos
          cuerdas adicionales hacia graves respecto a una guitarra estándar de 6 cuerdas. Pero manteniendo la capacidad
          de poder reproducir rápidos pasajes en las cuerdas más finas.
        </p>
        <img src="img/8cuerdas.jpg" class="img-fluid rounded mx-auto d-block container-md" alt="8cuerdas" width="100%">
      </div>
    </div>
    <div id="dobleMastil" class="container-fluid padding_texto" style="display: none;">
      <div class="column">
        <h2 class="text_guitarasH">Guitarra de doble mástil</h2>
        <p class="text_guitaras">
          Esta guitarra no se parece en nada a las de la lista. Resulta que tiene dos guitarras diferentes y diversas en
          el mismo cuerpo. Hay un mástil convencional estándar que sostiene las seis cuerdas y luego hay otro de doce
          cuerdas. Las combinaciones también son diferentes, y el mismo cuerpo sirve como centro de resonancia en este
          caso.<br>
          La guitarra suele ser útil para los casos en los que hay que seguir cambiando las notas y una sola guitarra no
          puede cubrirlo todo. Los guitarristas de rock a menudo eligen esta opción como la favorita para sus
          actuaciones en directo o cuando el guitarrista necesita trabajar en una pista multiguitarra al mismo tiempo en
          una grabación.
        </p>
        <img src="img/dobleMAstil.jpg" class="img-fluid rounded mx-auto d-block container-md" alt="2mastil"
          width="100%">
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
    <script src="js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/js_.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </div>
</body>

</html>
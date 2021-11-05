<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Oswald:wght@200;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/all.min.css" />
    <!-- LIBRERÍA ÍCONOS -->
    <link rel="stylesheet" href="styles/fontawesome.min.css" />
    <!-- LIBRERÍA ÍCONOS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <!-- LIBRERÍA BOOTSTRAP -->
    <link rel="stylesheet" href="styles/normalize.css" />
    <!-- NORMALIZAMOS ESTILOS -->
    <link rel="stylesheet" href="styles/styles.css" />
    <!-- ESTILOS PROPIOS -->
    <link rel="stylesheet" href="styles/bannerofertasstyles.css" />
    <!-- ESTILOS SLIDER -->
  </head>

  <body>
    <!-- Incluimos el navbar -->
    <?php require_once 'pagesJSON/footer_navbar/nav.php';?>
    <!--  COMIENZA EL CONTENIDO DE LA PÁGINA WEB -->

<!-- Slideshow container -->
<div class="slideshow-container">
 <!-- Full-width images with number and caption text -->
 <div class="mySlides fade">
    <div class="numbertext">1 / 2</div>
    <div class="mobilecontainer"><img src="img/oferta1.png" style="width:100%"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 2</div>
    <div class="mobilecontainer"><img src="img/oferta2.png" style="width:100%"></div>
  </div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
</div>

  <div style="padding: 30px"></div>

    <!--  ¿Cuál es tu estilo?  -->
    <div class="contenedor-text">
      <div>
        <h3 class="contenedor-text-style">¿Cuál es tu estilo?</h3>
      </div>
    </div>

    <!--  Contenedor de cartas con MUJERES, HOMBRE Y NIÑOS  -->
    <div class="contenedor-imagenes">
      <div  class="contenedor-div-imagenes">
        <div>
          <img src="img/mujerca.png" class="contenedor-imagenes-style" />
        </div>
        <div
          class="contenedor-imagenes-aux"
          onclick="location.href='categoriaMujeres.html'"
        ></div>
        <div class="borde-imagen"></div>
        <div class="texto-imagen">MUJER</div>
      </div>
      <div  class="contenedor-div-imagenes">
        <div>
          <img src="img/hombreca.png" class="contenedor-imagenes-style" />
        </div>
        <div
          class="contenedor-imagenes-aux"
          onclick="location.href='categoriaHombres.html'"
        ></div>
        <div class="borde-imagen"></div>
        <div class="texto-imagen">HOMBRE</div>
      </div>
      <div  class="contenedor-div-imagenes">
        <div>
          <img src="img/ninoca.png" class="contenedor-imagenes-style" />
        </div>
        <div
          class="contenedor-imagenes-aux"
          onclick="location.href='categoriaNinos.html'"
        ></div>
        <div class="borde-imagen"></div>
        <div class="texto-imagen">NIÑO</div>
      </div>
    </div>
    <div style="padding: 60px"></div>
    <!--  Novedades  -->
    <div class="contenedor-text">
      <div>
        <h3 class="contenedor-text-style">Novedades</h3>
      </div>
    </div>
    
    <!--
    <div style="padding: 60px"></div>
    -->

    <section class="contenedor-card-zapatos">
          <?php
          require 'pagesJSON/tablaDeProductos.php';
          ?>
    </section>

    <div style="padding: 60px"></div>

    <!-- 
      TERMINA EL CONTENIDO DE LA PÁGINA WEB 
    -->

    <!-- Footer de la página -->
    <?php require_once 'pagesJSON/footer_navbar/footer.php';?>

    <!-- SCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/cargarProductos.js"></script>
  </body>
</html>

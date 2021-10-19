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
  </head>

  <!-- Comienza el cuerpo de la página -->

  <body>
    <!-- Incluimos el navbar -->
    <?php require_once 'pagesJSON/footer_navbar/nav.php';?>

    <!--  COMIENZA EL CONTENIDO DE LA PÁGINA WEB -->

    <!-- Ofertas banner -->
      <div class="contenedor-imagenes2">
        <div>
          <img src="img/ofertaca.png" class="imagenes2" />
        </div>
      <div
      class="cuadro-ofertasaux"
      onclick="location.href='categoriaOfertas.html'"></div>
      <div class="cuadro-ofertas2"></div>
      <div class="cuadro-ofertas">    
        <div class="texto-ofertas2">HASTA</div>
        <div class="texto-ofertas4">40%</div>
        <div class="texto-ofertas3">de descuentos</div>
        <div class="texto-ofertas1">Aprovecha los descuentos de mitad de temporada en productos seleccionados.<br />¡ Acumulable con otras promociones !
        </div>
      </div>
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
      <div>
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
      <div>
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
      <div>
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
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card m-3">
        <img src="img/zapato1.png" class="card-img-top" />
        <div class="card-body">
          <h3 class="card-title">Nombre zapato</h3>
          <p class="card-text m-0">Descripción del producto</p>
          <p class="card-text"><strong> ID. Producto: #121212</strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$100.000</li>
              <li class="col card-precio">
                <a href="#" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div style="padding: 60px"></div>

    <!-- 
      TERMINA EL CONTENIDO DE LA PÁGINA WEB 
    -->

    <!-- Footer de la página -->
    <?php require_once 'pagesJSON/footer_navbar/footer.php';?>

    <!-- SCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

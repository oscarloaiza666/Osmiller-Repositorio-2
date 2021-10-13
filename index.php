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

  <form action=""></form>

  <!-- Comienza el cuerpo de la página -->

  <body>
    <!-- Header del header -->
    <div>
      <nav class="navbar headerDelHeader">
        <ul class="nav">
          <li class="nav-item">
            <a
              class="nav-link headerDelHeader cursor-link-clicker"
              href="login.html"
              >Iniciar sesión</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link headerDelHeader cursor-link-clicker"
              href="quienesSomos.html"
              >Quienes somos</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link headerDelHeader cursor-link-clicker"
              href="ayuda.html"
              >Ayuda</a
            >
          </li>
        </ul>
      </nav>
    </div>

    <!--  Header de la página  -->
    <div class="headerLogo">
      <img src="img/logoOsmiller.png" width="250" />
    </div>

    <!-- Barra de navegación -->
    <header class="header-navbar">
      <nav class="header-navbar-nav">
        <div class="header-navbar-img">
          <a href="index.html"
            ><img src="img/logoOsmillerSinLetra.png" alt="HOME"
          /></a>
        </div>
        <div>
          <ul class="header-navbar-menu">
            <li>
              <a class="nav-link" href="categoriaMujeres.html">MUJERES</a>
            </li>
            <li>
              <a class="nav-link" href="categoriaHombres.html">HOMBRES</a>
            </li>
            <li><a class="nav-link" href="categoriaNinos.html">NIÑOS</a></li>
            <li>
              <a class="nav-link ofertas" href="categoriaOfertas.html"
                >OFERTAS</a
              >
            </li>
          </ul>
        </div>
        <div class="header-navbar-derecha">
          <ul class="header-navbar-menu">
            <a class="navbar-brand">
              <input class="form-control" type="text" placeholder="Buscar" />
            </a>
            <a href="miCuenta.html"
              ><i class="far fa-user material-icons"></i
            ></a>
            <a href="carritoCompras.html"
              ><i class="fas fa-shopping-bag material-icons"></i
            ></a>
          </ul>
        </div>
      </nav>
    </header>

    <!--
      COMIENZA EL CONTENIDO DE LA PÁGINA WEB 
    -->

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

    <footer class="footer nuevo pt-4">
      <div class="container">
        <div class="seccion-footer seccion-image">
          <a href="index.html">
            <img src="img/logoOsmiller.png" alt="" />
          </a>
        </div>
        <div class="seccion-footer links-footer">
          <h3>NOSOTROS</h3>
          <ul class="ul-footer-nuevo">
            <li>
              <a href="quienesSomos.html">Quienes somos</a>
            </li>
            <li>
              <a href="tiendas.html">Tiendas</a>
            </li>
            <li>
              <a href="acuerdoOrganizacion.html"
                >Acuerdo de organización empresarial</a
              >
            </li>
            <li>
              <a href="avisoOrganizacion.html">Aviso de organización</a>
            </li>
          </ul>
        </div>
        <div class="seccion-footer links-footer">
          <h3>ASISTENCIA</h3>
          <ul class="ul-footer-nuevo">
            <li>
              <a href="quienesSomos.html">Quienes somos</a>
            </li>
            <li>
              <a href="tiendas.html">Tiendas</a>
            </li>
            <li>
              <a href="acuerdoOrganizacion.html"
                >Acuerdo de organización empresarial</a
              >
            </li>
            <li>
              <a href="avisoOrganizacion.html">Aviso de organización</a>
            </li>
          </ul>
        </div>
        <div class="seccion-footer links-footer">
          <h3>TÉRMINOS Y CONDICIONES</h3>
          <ul class="ul-footer-nuevo">
            <li>
              <a href="quienesSomos.html">Quienes somos</a>
            </li>
            <li>
              <a href="tiendas.html">Tiendas</a>
            </li>
            <li>
              <a href="acuerdoOrganizacion.html"
                >Acuerdo de organización empresarial</a
              >
            </li>
            <li>
              <a href="avisoOrganizacion.html">Aviso de organización</a>
            </li>
          </ul>
        </div>
        <div class="seccion-footer">
          <h3>CONTACTO</h3>
          <ul class="ul-footer-nuevo">
            <li>
              <a href="https://www.facebook.com" target="_blank"
                ><i class="fab fa-facebook font-awesome-custom-2"></i
              ></a>
            </li>
            <li>
              <a href="https://www.whatsapp.com" target="_blank"
                ><i class="fab fa-whatsapp font-awesome-custom-2"> </i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <div class="footer-copyright">
      <p>© 2021 OSMILLER CALZADO</p>
    </div>
    <!-- SCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
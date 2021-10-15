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
    <link rel="stylesheet" href="styles/fontawesome.min.css" />
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/normalize.css" />
    <link rel="stylesheet" href="styles/styles.css" />
  </head>

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

    <!---------------------------------------------
      COMIENZA EL CONTENIDO DE LA PÁGINA WEB 
  ---------------------------------------------->
    <div style="padding: 60px"></div>

    <div class="contenedor-card-login">
      <form class="card card-login-border login">
        <div>
          <h1 class="card-login-title">REGISTRARSTE</h1>
        </div>
        <div class="mb-4">
          <input
            type="email"
            name="email"
            class="form-control card-login-text"
            id="exampleDropdownFormEmail1"
            placeholder="Correo electrónico"
          />
        </div>
        <div class="mb-4">
          <input
            type="password"
            name="confirm_password"
            class="form-control card-login-text"
            id="exampleDropdownFormPassword1"
            placeholder="Contraseña"
          />
        </div>
        <div class="mb-3">
          <input
            type="password"
            name="password"
            class="form-control card-login-text"
            id="exampleDropdownFormPassword1"
            placeholder="Confirmar contraseña"
          />
        </div>
        <div class="mb-4">
          <div class="form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="dropdownCheck"
            />
            <label class="form-check-label card-login-text" for="dropdownCheck">
              Mantener sesión iniciada
            </label>
          </div>
        </div>
        <div class="card-login-button">
          <button
            type="submit"
            value="Send"
            class="btn boton-login btn-primary"
          >
            INICIAR SESIÓN
          </button>
        </div>
      </form>
    </div>

    <div style="padding: 60px"></div>

    <!------------------------------------------------
      TERMINA EL CONTENIDO DE LA PÁGINA WEB 
    ------------------------------------------------>

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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

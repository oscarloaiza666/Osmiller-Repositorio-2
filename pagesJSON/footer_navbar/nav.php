<!-- Header del header -->
    <div>
      <nav class="navbar headerDelHeader">
        <ul class="nav">
            <?php
                session_start();
                if (isset($_SESSION['login'])) {
                  $nombre = $_SESSION['nombre'];
                  echo '
                  <li class="nav-item nav-link headerDelHeader cursor-link-clicker"
                  >¡Bienvenid@, '.$nombre.'!</li>
                  <li class="nav-item">
                  <a class="nav-link headerDelHeader cursor-link-clicker"
                  href="database/logout.php"
                  >Cerrar sesión</a></li>';
                } else {
                  echo '<a
                  class="nav-link headerDelHeader cursor-link-clicker"
                  href="login.php"
                  >Iniciar sesión</a>';
              }
            ?>

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

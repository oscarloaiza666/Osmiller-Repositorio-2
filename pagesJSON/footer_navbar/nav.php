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
    <header class="header-navbar" id="navbar-id">
    <nav class="header-navbar-nav">
        <div class="header-navbar-img">
          <a href="index.php"
            ><img src="img/logoOsmillerSinLetra.png" alt="HOME"
          /></a>
        </div>
        <div>
          <ul class="header-navbar-menu">
            <li>
              <a class="nav-link" href="productosPorCategoria.php?idCategoria=<?php echo '1'?>">MUJERES</a>
            </li>
            <li>
              <a class="nav-link" href="productosPorCategoria.php?idCategoria=<?php echo '2'?>">HOMBRES</a>
            </li>
            <li>
              <a class="nav-link" href="productosPorCategoria.php?idCategoria=<?php echo '3'?>">NIÑOS</a>
            <li>
            <a class="nav-link ofertas" href="productosPorCategoria.php?idCategoria=<?php echo '0'?>">OFERTAS</a>
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
            <a href="carritoCompras.php"
              ><i class="fas fa-shopping-bag material-icons"></i
            ></a>
          </ul>
        </div>
      </nav>
      <nav-mobile>
        <a href="index.php"><img src="img/logoOsmiller.png" alt="HOME" /></a>
        <input class="form-control" type="text" placeholder="Buscar" />
        <div class="mobile-nav-buttons">
          <ul class="header-navbar-menu">
            <a class="nav-buttons" href="miCuenta.html"
              ><i class="far fa-user material-icons"></i
            ></a>
            <a class="nav-buttons" href="carritoCompras.html"
              ><i class="fas fa-shopping-bag material-icons"></i
            ></a>
          </ul>
          <button class="hamburguer"><div class="bar"></div></button>
        </div>
      </nav-mobile>
      <nav class="mobile-nav">
        <div>
          <hr />
          <ul class="header-navbar-menu">
            <li>
              <a class="nav-link" href="productosPorCategoria.php?idCategoria=<?php echo '1'?>">MUJERES</a>
            </li>
            <li>
              <a class="nav-link" href="productosPorCategoria.php?idCategoria=<?php echo '2'?>">HOMBRES</a>
            </li>
            <li>
              <a class="nav-link" href="productosPorCategoria.php?idCategoria=<?php echo '3'?>">NIÑOS</a>
            <li>
              <a class="nav-link ofertas" href="productosPorCategoria.php?idCategoria=<?php echo '0'?>">OFERTAS</a>
            </li>
            <hr />
            <li><a class="nav-link" href="miCuenta.html">Mi cuenta</a></li>
            <li>
              <a class="nav-link" href="carritoCompras.php"
                >Carrito de compras</a
              >
            </li>
            <li><a class="nav-link" href="ayuda.html">Ayuda</a></li>
            <li>
              <a class="nav-link" href="quienesSomos.html"
                >Términos y condiciones</a
              >
            </li>
            <hr />
          </ul>
        </div>
        <div class="mobile-nav-imagen">
          <img src="img/logoOsmillerSinLetra.png" width="130px" alt="" />
        </div>
      </nav>
    </header>

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
    <header class="header-navbar" id="navbar-id"></header>

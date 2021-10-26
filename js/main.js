window.onload = function () {
  window.addEventListener("scroll", function (e) {
    if (window.pageYOffset > 100) {
      document.querySelector("header").classList.add("is-scrolling");
    } else {
      document.querySelector("header").classList.remove("is-scrolling");
    }
  });

  const navbar_template = `
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
      <nav-mobile>
        <a href="index.html"><img src="img/logoOsmiller.png" alt="HOME" /></a>
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
            <hr />
            <li><a class="nav-link" href="miCuenta.html">Mi cuenta</a></li>
            <li>
              <a class="nav-link" href="carritoCompras.html"
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
      </nav>`;
  document.getElementById("navbar-id").innerHTML = navbar_template;

  const menu_btn = document.querySelector(".hamburguer");
  const mobile_menu = document.querySelector(".mobile-nav");
  const body_scroll = document.querySelector("body");
  menu_btn.addEventListener("click", function () {
    menu_btn.classList.toggle("is-active");
    mobile_menu.classList.toggle("is-active");
    body_scroll.classList.toggle("noscroll");
  });
};

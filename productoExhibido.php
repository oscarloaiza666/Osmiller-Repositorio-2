<?php
    require 'database/database.php';
    $idProducto = $_GET[idProducto];
    $query= mysqli_query($conn,"SELECT * FROM `Articulo` WHERE PK_IdArticulo='$idProducto'");
    $result= mysqli_num_rows($query);
?>

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
    <header class="header-navbar" id="navbar-id"></header>

    <!---------------------------------------------
      COMIENZA EL CONTENIDO DE LA PÁGINA WEB 
    -->
    <?php
        if($result > 0){
        $row = mysqli_fetch_array($query);
          ?>
      <section class="contenedor-producto-exhibido">
      <div class="producto-exhbido-imagen">
        <img src="img/zapato2.png" alt="" />
      </div>
      <div class="producto-exhibido-texto-contenedor">
        <h1>
          <?php echo $row['Nombre']; ?>        
        </h1>
        <hr />
        <div class="producto-exhibido-texto-contenedor2">
          <p class="producto-exhibido-texto-id">ID.Producto: <?php echo $row['PK_IdArticulo']; ?></p>
          <p class="producto-exhibido-texto-precio2"><?php echo $row['Precio_Venta']; ?></p>
          <p class="producto-exhibido-texto-precio1"><?php echo $row['Precio_Venta']; ?></p>
        </div>
        <h4>PLACEHOLDER - SELECCIÓN DE TALLAS</h4>
        <h4>PLACEHOLDER - SELECCIÓN DE COLOR</h4>
        <button href="#" class="btn btn-bg btn-producto-exhibido">
          AÑADIR AL CARRITO DE COMPRAS
        </button>
      </div>
    </section>

    <section class="contenedor-producto-exhibido">
      <div class="producto-exhibido-texto-contenedor">
        <h2>Descripción</h2>
        <p class="producto-exhibido-texto-descripcion">
          <?php echo nl2br($row['Descripcion']); ?>
        </p>
      </div>
      <div class="producto-exhibido-texto-contenedor">
        <h2>Detalles</h2>
        <div class="producto-exhibido-texto-descripcion">
          <ul>
            <li>Descripción</li>
            <li>Descripción</li>
            <li>Descripción</li>
            <li>Descripción</li>
            <li>Descripción</li>
          </ul>
        </div>
      </div>
    </section>

    <?php
    } else {
      ?>
        <h1>SEXO</h1>
      <?php
    }  
    ?>
   

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
                <a href="productoExhibido.html" class="btn btn-bg">COMPRAR</a>
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
                <a href="productoExhibido.html" class="btn btn-bg">COMPRAR</a>
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
                <a href="productoExhibido.html" class="btn btn-bg">COMPRAR</a>
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
                <a href="productoExhibido.html" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- 
      TERMINA EL CONTENIDO DE LA PÁGINA WEB 
    ------------------------------------------------>

    <!-- Footer de la página -->

    <footer class="footer nuevo pt-4">
      <div class="container">
        <div class="seccion-footer seccion-image">
          <a href="https://osmiller.herokuapp.com/">
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
          </ul>
        </div>
        <div class="seccion-footer links-footer">
          <h3>ASISTENCIA</h3>
          <ul class="ul-footer-nuevo">
            <li>
              <a href="paginaacuerdos.html"
                >Acuerdo de organización empresarial</a
              >
            </li>
            <li>
              <a href="paginaaviso.html">Aviso de negociación</a>
            </li>
            <li>
              <a href="paginaterminos.html">Términos y condiciones</a>
            </li>
          </ul>
        </div>
        <div class="seccion-footer">
          <h3>CONTACTO</h3>
          <ul class="iconos">
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
    <div class="footer-copyright">© 2021 OSMILLER CALZADO</div>

    <!-- SCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

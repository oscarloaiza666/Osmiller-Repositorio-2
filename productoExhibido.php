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
      <!-- Incluimos el navbar -->
      <?php require_once 'pagesJSON/footer_navbar/nav.php';?>
    <!---------------------------------------------
      COMIENZA EL CONTENIDO DE LA PÁGINA WEB 
    -->
    <?php
        if($result > 0){
        $row = mysqli_fetch_array($query);
          ?>
      <section class="contenedor-producto-exhibido">
      <div class="producto-exhbido-imagen">
        <?php
            $s=$row['Imagen'];
            echo '<img class="card-img-top" src="data:image/png;base64,'.base64_encode($s).'"/>';
        ?>
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
      echo 'ERROR';
    }  
    ?>
     
    <section class="contenedor-card-zapatos">
      <?php include 'pagesJSON/tablaDeProductos.php'?>
    </section>

    <!-- 
      TERMINA EL CONTENIDO DE LA PÁGINA WEB 
    ------------------------------------------------>

    <!-- Footer de la página -->
    <?php require_once 'pagesJSON/footer_navbar/footer.php';?>

    <!-- SCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

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

    <div class="acuerdos-container">
      <div class="acuerdos-paragraph">
        <h2>Acuerdo de Organización Empresarial</h2>
        <p class="acuerdos-paragraph-text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam
          cumque aspernatur laudantium iure dolorum consectetur earum, minima
          repudiandae repellendus eligendi eaque placeat repellat architecto
          perspiciatis labore vel? Itaque, hic illo.
        </p>
      </div>
    </div>

    <!-- 
      TERMINA EL CONTENIDO DE LA PÁGINA WEB 
    ------------------------------------------------>
    <!-- Footer de la página -->
    <?php require_once 'pagesJSON/footer_navbar/footer.php';?>

    <!-- SCRIPTS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="pagesJSON/acuerdos/script.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

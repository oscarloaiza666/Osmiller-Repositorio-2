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
    <script src="js/jquery.js"></script>
    	<!-- Script -->
	  <script type="text/javascript">
      $(document).ready(function () {
          $("#registrar").click(function () {
              nombre = $("#nombre").val();
              correo = $("#correo").val();
              contrasena = $("#contrasena").val();
              tipoUsuario = "0";
              $.ajax({
                  type: "POST",
                  url: "database/adduser.php",
                  data: "&nombre=" + nombre + "&correo=" + correo + "&contrasena=" + contrasena + "&tipoUsuario=" + tipoUsuario,
                  success: function (html) {
                      if (html == "true") {
                          $("#add_err2").html(
                              '<div class="alert alert-success"> \
                              <strong>Account</strong> processed.  \
                              </div>'
                          );
                          window.location.href = "index.php";
                      } else if (html == "false") {
                          $("#add_err2").html(
                              '<div class="alert alert-danger"> \
                              <strong>Email Address</strong> already in system.  \
                              </div>'
                          );
                      } else if (html == "nombre") {
                          $("#add_err2").html(
                              '<div class="alert alert-danger"> \
                              <strong>First Name</strong> is required.  \
                              </div>'
                          );
                      } else if (html == "eshort") {
                          $("#add_err2").html(
                              '<div class="alert alert-danger"> \
                              <strong>Email Address</strong> is required.  \
                              </div>'
                          );
                      } else if (html == "eformat") {
                          $("#add_err2").html(
                              '<div class="alert alert-danger"> \
                              <strong>Email Address</strong> format is not valid.  \
                              </div>'
                          );
                      } else if (html == "pshort") {
                          $("#add_err2").html(
                              '<div class="alert alert-danger"> \
                              <strong>Password</strong> must be at least 4 characters .  \
                              </div>'
                          );
                      } else {
                          $("#add_err2").html(
                              '<div class="alert alert-danger"> \
                              <strong>Error</strong> processing request. Please try again.  \
                              </div>'
                          );
                      }
                  },
                  beforeSend: function () {
                      $("#add_err2").html("loading...");
                  },
              });
              return false;
          });
      });
    </script>
  </head>

  <!-- Comienza el cuerpo de la página -->

  <body>
    <!-- Incluimos el navbar -->
    <?php require_once 'pagesJSON/footer_navbar/nav.php';?>

    <!---------------------------------------------
      COMIENZA EL CONTENIDO DE LA PÁGINA WEB 
    ---------------------------------------------->
    <div style="padding: 60px"></div>

    <div class="contenedor-card-login">
      <form class="card card-login-border login">
        <div>
          <h1 class="card-login-title">REGISTRATE</h1>
        </div>
        <div id="add_err2"></div>
        <div class="mb-4">
          <input
            type="text"
            id="nombre"
            name="nombre"
            maxlenght="25"
            class="form-control card-login-text"
            placeholder="Nombre"
          />
        </div>
        <div class="mb-4">
          <input
            type="email"
            id="correo"
            name="correo"
            maxlenght="50"
            class="form-control card-login-text"
            placeholder="Correo electrónico"
          />
        </div>
        <div class="mb-4">
          <input
            type="password"
            id="contrasena"
            name="contrasena"
            maxlenght="15"
            class="form-control card-login-text"
            placeholder="Contraseña"
          />
        </div>
        <div class="mb-3">
          <input
            type="password"
            id="confirmar_contrasena"
            name="confirmar_contrasena"
            class="form-control card-login-text"
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
            id = "registrar"
            class="btn boton-signup btn-primary"
          >
            ÚNETE A NOSOTROS
          </button>
        </div>
      </form>
    </div>

    <div style="padding: 60px"></div>

    <!------------------------------------------------
      TERMINA EL CONTENIDO DE LA PÁGINA WEB 
    ------------------------------------------------>

    <!-- Footer de la página -->
    <?php require_once 'pagesJSON/footer_navbar/footer.php';?>
    <!-- SCRIPTS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

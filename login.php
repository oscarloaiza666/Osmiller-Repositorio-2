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
  	<!-- jQuery -->
    <script src="js/jquery.js"></script>
  	<!-- Script -->
  	<script type="text/javascript">
        	$(document).ready(function(){
			    $("#iniciarsesion").click(function(){
					correo=$("#correo").val();
					contrasena=$("#contrasena").val();
					 $.ajax({
						type: "POST",
						url: "database/pcheck.php",
						data: "&correo=" + correo + "&contrasena=" + contrasena,
						success: function(html){
						  if(html=='true')
						  {							  
							  $("#add_err2").html('<div class="alert alert-success"> \
									<strong>Authenticated</strong> \ \
									</div>');
							window.location.href = "index.php";
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
									<strong>Authentication</strong> failure. \ \
									</div>');
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
									<strong>Error</strong> processing request. Please try again. \ \
									</div>');
						  }
						},
						beforeSend:function()
						{
              $("#add_err2").html("loading...");
						}
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
          <h1 class="card-login-title">INICIAR SESIÓN</h1>
        </div>
        <div id="add_err2"></div>
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
        <div class="mb-3">
          <input
            type="password"
            id="contrasena"
            name="contrasena"
            maxlenght="15"
            class="form-control card-login-text"
            placeholder="Contraseña"
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
            id = "iniciarsesion"
            class="btn boton-login btn-primary"
          >
            INICIAR SESIÓN
          </button>
        </div>
      </form>
      <form class="card card-login-border">
        <div>
          <h1 class="card-login-title">ÚNETE A NOSOTROS</h1>
        </div>
        <div class="mb-1">
          <p class="card-login-text">Únete a la familia Osmiller:</p>
        </div>
        <div class="mb-1">
          <p class="card-login-text">- Recibe nuestras mejores ofertas</p>
        </div>
        <div class="mb-1">
          <p class="card-login-text">- Accede a bonos de descuento</p>
        </div>
        <div class="mb-1">
          <p class="card-login-text">
            - Realiza compras mas personalizadas y rapidas
          </p>
        </div>
        <div class="mb-1">
          <p class="card-login-text">- Obten notificaciónes mensuales</p>
        </div>
        <div class="card-login-button">
          <a href="signup.php"><button class="btn boton-signup btn-primary">
            ÚNETE A NOSOTROS
            </button>
          </a>
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

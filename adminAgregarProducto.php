<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles/adminstyles.css" />
    <title>Panel Administrador</title>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#subirCambios").click(function () {
                nombre = $("#nombre").val();
                idProducto = $("#idProducto").val();
                categoria = $("#categoria").val();
                codigo = $("#codigo").val();
                precio_venta = $("#precio_venta").val();
                stock = $("#stock").val();
                descripcion = $("#descripcion").val();
                $.ajax({
                    type: "POST",
                    url: "database/agregarProductos.php",
                    data:   "&nombre=" + nombre +
                            "&idProducto=" + idProducto +
                            "&categoria=" + categoria +
                            "&codigo=" + codigo +
                            "&precio_venta=" + precio_venta +
                            "&stock=" + stock +
                            "&descripcion=" + descripcion,
                    success: function (html) {
                        if (html == "true") {
                            $("#add_err2").html(
                                '<div class="alert alert-success"> \
                                <strong>El producto se ha registrado correctamente.</strong> \
                                </div>'
                            );
                            window.location.href = "admin.php";
                        } else if (html == "false") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                Este <strong>ID de producto</strong> ingresado ya está registrado.  \
                                </div>'
                            );
                        } else if (html == "_idProducto") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                Un <strong>ID producto</strong> de mínimo 6 carácteres y de máximo 6 carácteres es requerido.  \
                                </div>'
                            );
                        } else if (html == "_nombre") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                Un <strong>nombre</strong> es requerido.  \
                                </div>'
                            );
                        } else if (html == "_categoria") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                Una <strong>categoria</strong> es requerida.  \
                                </div>'
                            );
                        } else if (html == "_precio_venta") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                El producto debe tener un <strong>precio de venta</strong> válido.  \
                                </div>'
                            );
                        } else if (html == "_codigo") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                El producto debe tener un <strong>código</strong> válido.  \
                                </div>'
                            );
                        } else if (html == "_stock") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                El <strong>stock</strong> es inválido.  \
                                </div>'
                            );
                        } else if (html == "_descripcion") {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                Recuerde completar el campo de la <strong>descripcion.</strong>  \
                                </div>'
                            );
                        } else {
                            $("#add_err2").html(
                                '<div class="alert alert-danger"> \
                                <strong>Error</strong> procesando la petición, intenta nuevamente o mas tarde.  \
                                </div> var_dump($nombre)',
                            );
                        }
                    },
                    beforeSend: function () {
                        $("#subirCambios").html("CARGANDO SOLICITUD...");
                    },
                    complete: function (){
                        $("#subirCambios").html("SUBIR");
                    }
                });
                return false;
            });
        });
    </script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="primary-bg" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom secondary-bg">
                <div class="headerLogo">
                <img src="img/logoOsmiller.png" width="200" height="130" />
                </div>
            </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-home me-2"></i>Inicio</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Ordenes</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-credit-card me-2"></i>Pagos</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-comments me-2"></i>Atención al cliente</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-tags me-2"></i>Productos</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-users me-2"></i>Empleados</a>
                <a href="https://osmiller.herokuapp.com/" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-desktop me-2"></i>Mi sitio web</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-wrench me-2"></i>Configuración</a>
                <a href="#" class="list-group-item list-group-item-action second-text fw-bold"><i
                        class="fas fa-chart-bar me-2"></i>Reportes</a>
                <a href="#" class="list-group-item list-group-item-action text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Cerrar Sesión</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Admin</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Mi cuenta
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configuración</a></li>
                                <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">6</h3>
                                <p class="fs-5">Ventas hoy</p>
                            </div>
                            <i class="fas fa-shopping-cart fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3</h3>
                                <p class="fs-5">Ventas mes</p>
                            </div>
                            <i
                                class="fas fa-shopping-cart fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">12</h3>
                                <p class="fs-5">Ventas anuales</p>
                            </div>
                            <i class="fas fa-shopping-cart fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">2</h3>
                                <p class="fs-5">Mensajes abiertos</p>
                            </div>
                            <i class="fas fa-comments fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                </div>

                <div class="row my-5">
                    <h3 class="fas fa-shopping-cart me-2 fs-4 mb-3">Lista de productos</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID. Producto</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Precio de venta</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">ADMINISTRAR</th>
                                </tr>
                            </thead>
                            <form>
                                <tbody>
                                    <tr>
                                        <th><input
                                            type="number"
                                            id="idProducto"
                                            name="idProducto"
                                            min="0"
                                            maxlenght="6"
                                            class="form-control card-login-text"
                                            placeholder="Mínimo 6 carácteres, máximo 6"
                                        /></th>
                                        <th><input type="file" id="file-selector" accept=".jpg, .jpeg, .png">
                                            <script>
                                                const fileSelector = document.getElementById('file-selector');
                                                fileSelector.addEventListener('change', (event) => {
                                                    const fileList = event.target.files;
                                                    console.log(fileList);
                                                });
                                            </script></th>
                                            <th><input
                                            type="text"
                                            id="nombre"
                                            name="nombre"
                                            maxlenght="6"
                                            class="form-control card-login-text"
                                        /></th>
                                        <th>
                                            <input
                                            type="list"
                                            list = "categoria"
                                            class="form-control card-login-text"
                                            >
                                            <datalist id="categoria">
                                                <option value="Mujer"></option>
                                                <option value="Hombre"></option>
                                                <option value="Niño"></option>
                                            </datalist>
                                        </th>
                                        <th><input
                                            type="number"
                                            min="0"
                                            id="codigo"
                                            name="codigo"
                                            maxlenght="3"
                                            class="form-control card-login-text"
                                        /></th>
                                        <th><input
                                            type="number"
                                            min="0"
                                            id="precio_venta"
                                            name="precio_venta"
                                            maxlenght="7"
                                            class="form-control card-login-text"
                                        /></th>
                                        <th><input
                                            type="number"
                                            min="0"
                                            id="stock"
                                            name="stock"
                                            maxlenght="3"
                                            class="form-control card-login-text"
                                        /></th>
                                        <th><input
                                            type="text"
                                            id="descripcion"
                                            name="descripcion"
                                            maxlenght="25"
                                            class="form-control card-login-text"
                                        /></th>
                                        <th scope="col">       
                                            <button
                                                type="submit"
                                                id = "subirCambios"
                                                class="btn boton-signup btn-primary"
                                            >
                                                SUBIR
                                            </button>
                                        </th>
                                    </tr>
                                </tbody>
                            </form>
                        </table>
                    </div>
                </div>
                <div id="add_err2"></div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
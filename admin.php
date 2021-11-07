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
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="primary-bg" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom secondary-bg">
                <div class="headerLogo">
                <img src="img/logoOsmiller.png" width="200" height="130" />
              </div></div>
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
                                    <th scope="col">Precio de venta</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">ADMINISTRAR
                                        <a href="adminAgregarProducto.php">AGREGAR</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'pagesJSON/tablaDeProductosAdmin.php'; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

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
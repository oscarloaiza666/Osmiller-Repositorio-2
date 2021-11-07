<?php
// Iniciar o verificar una sesión
session_start();

// $VARIABLE = funciones, texto, etc.
$test ='test';

var_dump($test);

// Vamos a llamar a la base de datos.
// $mysqli = new mysqli('servidor',      'usuario',   'contraseña', 'nombre de la base de datos');
$mysqli = new mysqli('remotemysql.com', 'tTKa4lBkxo', 'A7sMUDGhft', 'tTKa4lBkxo');

// Si llega a suceder algún error, nos muestra en consola un mensaje.
if ($mysqli->connect_error) {
    
}

$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
$idProducto = mysqli_real_escape_string($mysqli, $_POST['idProducto']);
$categoria = mysqli_real_escape_string($mysqli, $_POST['categoria']);
$codigo = mysqli_real_escape_string($mysqli, $_POST['codigo']);
$precio_venta = mysqli_real_escape_string($mysqli, $_POST['precio_venta']);
$stock = mysqli_real_escape_string($mysqli, $_POST['stock']);
$descripcion = mysqli_real_escape_string($mysqli, $_POST['descripcion']);

//VALIDATION

if (strlen($idProducto) != 6) {
    echo '_idProducto';
} elseif (strlen($nombre) < 2) {
    echo '_nombre';
} elseif (strlen($categoria) < 2) {
    echo '_categoria';
} elseif (strlen($codigo) < 0) {
    echo '_codigo';
} elseif (strlen($precio_venta) < 0) {
    echo '_precio_venta';
} elseif (strlen($stock) < 0) {
    echo '_stock';
} elseif (strlen($descripcion) < 6) {
    echo '_descripcion';
	
//VALIDATION
	
} else {
	$query = "SELECT PK_IdArticulo FROM Articulo WHERE PK_IdArticulo='$idProducto'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {
			$insert_row = $mysqli->query("INSERT INTO Articulo 
                                        (PK_IdArticulo, FK_IdCategoria, PK_Codigo, Nombre, Precio_Venta, Stock, Descripcion, Estado)
                                        VALUES
                                        ('$idProducto', '$categoria', '$codigo', '$nombre', '$precio_venta', '$stock', '$descripcion', 'Disponible')");
			if ($insert_row) {
				echo 'true';
			}
		} else {
			echo 'false';
		}	
}

?> 
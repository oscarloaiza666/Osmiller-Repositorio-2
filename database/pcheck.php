<?php
session_start();

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//Open a new connection to the MySQL server
$mysqli = new mysqli('remotemysql.com', 'tTKa4lBkxo', 'A7sMUDGhft', 'tTKa4lBkxo');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM lista_usuarios WHERE correo='$correo'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

    if (password_verify($contrasena, $row['contrasena'])) {
        $_SESSION['login'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['tipoUsuario'] = $row['tipoUsuario'];
        echo 'true';
    }
    else {
        echo 'false';
    }
} else {
    echo 'false';
}
?>
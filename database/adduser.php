<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('remotemysql.com', 'tTKa4lBkxo', 'A7sMUDGhft', 'tTKa4lBkxo');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
$correo = mysqli_real_escape_string($mysqli, $_POST['correo']);
$contrasena = mysqli_real_escape_string($mysqli, $_POST['contrasena']);
$tipoUsuario = mysqli_real_escape_string($mysqli, $_POST['tipoUsuario']);

//VALIDATION

if (strlen($nombre) < 2) {
    echo 'nombre';
} elseif (strlen($correo) <= 4) {
    echo 'eshort';
} elseif (filter_var($correo, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($contrasena) <= 4) {
    echo 'pshort';
	
//VALIDATION
	
} else {
	//PASSWORD ENCRYPT
	$contrasena = password_hash($contrasena, PASSWORD_BCRYPT, array('cost' => 12));
	
	$query = "SELECT correo FROM lista_usuarios WHERE correo='$correo'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO lista_usuarios (nombre, correo, contrasena, tipoUsuario) VALUES ('$nombre', '$correo', '$contrasena', '$tipoUsuario')");

			if ($insert_row) {
				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['nombre'] = $nombre;
                $_SESSION['tipoUsuario'] = $row['tipoUsuario'];
				echo 'true';
			}
		} else {
			echo 'false';
		}	
}

?>
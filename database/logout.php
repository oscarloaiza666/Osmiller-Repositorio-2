<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['nombre']);

header("location:../index.php?logout=true");
?>

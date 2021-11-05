<?php
    $server = "remotemysql.com";
    $username = "tTKa4lBkxo";
    $password ="A7sMUDGhft";
    $database = "tTKa4lBkxo";
    
$conn = new mysqli($server,$username, $password,$database);

//Evaluar conexion
if ($conn->connect_error)
{
   die("Conexion fallida: " .$conn->connect-error);
}
?>
<?php
include_once "../categoriaMujeres.html"
$producto_tienda = new ProductoTienda();
session_start();

if ($_POST['funcion']=='llenar_productos'){
    

}


$jsonstring = json_encode($json);
echo $jsonstring;

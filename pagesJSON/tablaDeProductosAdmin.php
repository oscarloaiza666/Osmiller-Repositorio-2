<?php
require 'database/database.php';
session_start(); 

$query= mysqli_query($conn,"SELECT * FROM `Articulo`");
$result= mysqli_num_rows($query);

if ($result > 0) {
    while($row= mysqli_fetch_array($query)){ ?>
        <tr>
        <td><?php echo $row["PK_IdArticulo"] ?></td>
        <td> <?php 
                $s=$row['Imagen'];
                echo '<img class="product-list-image" src="data:image/png;base64,'.base64_encode($s).'"/>';
        ?></td>
        <td><?php echo $row["Nombre"] ?></td>
        <?php 
            $categoria = $row["FK_IdCategoria"];
            if ($categoria == '1'){
                $categoria_aux = 'Mujer';
            } else if ($categoria == '2') {
                $categoria_aux = 'Hombre';
            } else if ($categoria =='3') {
                $categoria_aux = 'Niños';
            }
        ?>
        <td><?php echo $categoria_aux ?></td>
        <td><?php echo $row["Precio_Venta"] ?></td>
        <td><?php echo $row["Stock"] ?></td>
        <td><?php echo $row["Descripcion"] ?></td>
        <td>
            <a href="">EDITAR</a>
            <a href="">ELIMINAR</a>
        </td>
        </tr>
        <?php } ?>
        <?php
}  
?>
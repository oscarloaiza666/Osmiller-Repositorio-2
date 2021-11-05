<?php 


session_start(); 

$numero = '2';
echo $numero;
if ($numero != '0'){
$query= mysqli_query($conn,"SELECT * FROM `Articulo`");
} else{
    $query= mysqli_query($conn,"SELECT * FROM `Articulo` WHERE FK_IdCategoria='$numero'");
}
$result= mysqli_num_rows($query);


if($result>0) //Recorro el arreglo de resultado
{ ?>
     <?php while($row= mysqli_fetch_array($query))
       { ?>
       
            <tr>
            <td><?php echo $row["PK_IdArticulo"] ?></td>
            <td><?php echo $row["FK_IdCategoria"] ?></td>
            <td><?php echo $row["PK_Codigo"] ?></td>
            <td><?php echo $row["Nombre"] ?></td>
            <td><?php echo $row["Precio_Venta"] ?></td>
            <td><?php echo $row["Stock"] ?></td>
            <td><?php echo $row["Descripcion"] ?></td>
            <td><?php echo $row["Estado"] ?></td>
            </tr>
      <?php } ?>
    </table> 
   </div>  
 <?php
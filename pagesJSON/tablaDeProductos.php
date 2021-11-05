<?php
require 'database/database.php'
?>
<?php 
session_start(); 

$numero = '0';
if ($numero == '0'){
$query= mysqli_query($conn,"SELECT * FROM `Articulo`");
} else{
    $query= mysqli_query($conn,"SELECT * FROM `Articulo` WHERE FK_IdCategoria='$numero'");
}
$result= mysqli_num_rows($query);

if($result>0) //Recorro el arreglo de resultado
{ ?>
    <?php while($row= mysqli_fetch_array($query))
       { ?>
           <div class="card m-3">
            <?php 
                $s=$row['Imagen'];
                echo '<img class="card-img-top" src="data:image/png;base64,'.base64_encode($s).'"/>';
            ?>
        <div class="card-body">
          <h3 class="card-title"><?php echo $row["Nombre"] ?></h3>
          <p class="card-text m-0"><?php echo $row["Descripcion"] ?></p>
          <p class="card-text"><strong> ID. Producto: <?php echo $row["PK_IdArticulo"] ?></strong></p>
          <div class="row">
            <ul class="nav">
              <li class="col card-precio">$<?php echo $row["Precio_Venta"]?></li>
              <li class="col card-precio">
                <a href="productoExhibido.php?idProducto=<?php echo $row["PK_IdArticulo"]?>" class="btn btn-bg">COMPRAR</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php } ?>
    </table> 
   </div>  
 <?php
}
else 
{
  ?>
   <div class=tabla>
      <h2 class="text-light"> INVENTARIO VACIO</h2>
</div>
  <?php
}
?>
</body> 
</html>
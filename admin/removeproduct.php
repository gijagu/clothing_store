<?php 

  include "header.php";
  include "../php/config.php";

    $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");

		$peticion = "DELETE FROM products WHERE id=".$_GET['id']."";
    $resultado = mysqli_query($conexion, $peticion);

		$peticion2 = "DELETE FROM imagesproducts WHERE idproduct=".$_GET['id']."";
    $resultado2 = mysqli_query($conexion, $peticion2);
    
		mysqli_close($conexion);
?>
<script type="text/javascript">
window.location="product.php";
</script>
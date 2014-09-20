<?php 

  include "header.php";
  include "../php/config.php";

    $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");

	$path      = "../photo";

	$peticion = "DELETE FROM products WHERE id=".$_GET['id']."";
        
    $resultado = mysqli_query($conexion, $peticion);

    $peticion_img  = "SELECT * FROM imagesproducts WHERE idproduct=".$_GET['id']."";        
    $resultado_img = mysqli_query($conexion, $peticion_img) or die("Failed to <strong class='highlight'>delete</strong> file");


    while($fila = mysqli_fetch_array($resultado_img)) {
			unlink($path . "/" . $fila['imagen']) or die("Failed to <strong class='highlight'>delete</strong> file");
    }


	$peticion2 = "DELETE FROM imagesproducts WHERE idproduct=".$_GET['id']."";
    $resultado2 = mysqli_query($conexion, $peticion2);
    
		mysqli_close($conexion);
?>
<script type="text/javascript">
window.location="product.php";
</script>
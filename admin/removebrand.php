<?php 

  include "header.php";
  include "../php/config.php";

    $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");

		$path      = "../photo/brand";
		
		$peticion  = "SELECT * FROM brand WHERE id=".$_GET['id'].""; 
		$resultado = mysqli_query($conexion, $peticion);
		$fila      = mysqli_fetch_array($resultado);

		unlink($path . "/" . $fila['imagen']) or die("Failed to <strong class='highlight'>delete</strong> file");
    
		$peticion = "DELETE FROM brand WHERE id=".$_GET['id']."";
    $resultado = mysqli_query($conexion, $peticion);

		mysqli_close($conexion);
?>
<script type="text/javascript">
// window.location="product.php";
</script>
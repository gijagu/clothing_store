<?php 

  include "header.php";
  include "../php/config.php";

    $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");

		$peticion = "UPDATE products SET nombre='".$_POST['nombre']."',
precio='".$_POST['precio']."',
existencias='".$_POST['existencias']."',
activado ='".$_POST['activado']."'

WHERE id=".$_GET['id']."
";
    $resultado = mysqli_query($conexion, $peticion);

		mysqli_close($conexion);
?>
<script type="text/javascript">
window.location="product.php";
</script>
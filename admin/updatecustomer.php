<?php 

  include "header.php";
  include "../php/config.php";

    $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");

		$peticion = "UPDATE customers SET nombre='".$_POST['nombre']."',
apellidos='".$_POST['apellidos']."',
email='".$_POST['email']."',
usuario='".$_POST['usuario']."',
contrasena='".$_POST['contrasena']."',
telefono='".$_POST['telefono']."',
movil='".$_POST['movil']."',
pais ='".$_POST['pais']."',
dninif ='".$_POST['dninif']."'

WHERE id=".$_GET['id']."
";
    $resultado = mysqli_query($conexion, $peticion);

		mysqli_close($conexion);
?>
<script type="text/javascript">
//window.location="customers.php";
</script>
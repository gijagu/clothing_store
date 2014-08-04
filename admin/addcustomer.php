    <?php 

      include "header.php";
      include "../php/config.php";

        $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
        mysqli_set_charset($conexion, "utf8");

        $peticion = "INSERT INTO customers VALUES (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."', '".$_POST['usuario']."', '".$_POST['contrasena']."', '".$_POST['telefono']."', '".$_POST['movil']."', '".$_POST['pais']."', '".$_POST['dninif']."' )";

        $resultado = mysqli_query($conexion, $peticion);

mysqli_close($conexion);
//var_dump($resultado);

?>

<script type="text/javascript">
window.location="customers.php";
</script>
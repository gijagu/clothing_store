    <?php 

      include "header.php";
      include "../php/config.php";

    $conexion  = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");
    
    if($_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
    {
      move_uploaded_file($_FILES['imagen']['tmp_name'],"../photo/brand/".$_FILES['imagen']['name']);
    }


    $peticion  = "INSERT INTO brand VALUES (NULL,'".$_POST['name']."','".$_POST['descripcion']."','".$_FILES['imagen']['name']."')";    
    $resultado = mysqli_query($conexion, $peticion);
        

	mysqli_close($conexion);


?>
<script type="text/javascript">
window.location="brand.php";
</script>
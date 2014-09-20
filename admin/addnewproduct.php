    <?php 

      include "header.php";
      include "../php/config.php";

    $conexion  = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");

    $checkBox = implode(',', $_POST['size']);

    
    $peticion  = "INSERT INTO products VALUES (NULL,'".$_POST['nombre']."','".$_POST['descripcion']."','".$_POST['precio']."','".$_POST['existencias']."','".$_POST['activado']."', '".$_POST['id_brand']."', '" .$checkBox. "', '".$_POST['colour']."'  )";    
    
    $resultado = mysqli_query($conexion, $peticion);
        
    
    $peticion  = "SELECT * FROM products ORDER BY id DESC LIMIT 1";
    $resultado = mysqli_query($conexion, $peticion);


    while($fila = mysqli_fetch_array($resultado)) 
    {
      $id = $fila['id'];
    }

    if($_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
    {
        move_uploaded_file($_FILES['imagen']['tmp_name'],"../photo/".$_FILES['imagen']['name']);
        $peticion  = "INSERT INTO imagesproducts VALUES (NULL,'".$id."','".$_FILES['imagen']['name']."','','')";
        $resultado = mysqli_query($conexion, $peticion);
    }


	mysqli_close($conexion);


?>
<script type="text/javascript">
// window.location="product.php";
</script>

    <?php 

      include "header.php";
      include "../php/config.php";

        $conexion  = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
        mysqli_set_charset($conexion, "utf8");
        
        $peticion  = "SELECT * FROM products WHERE id=".$_GET['id'].""; 
        $resultado = mysqli_query($conexion, $peticion);
        $fila      = mysqli_fetch_array($resultado);

        $peticion_img  = "SELECT * FROM imagesproducts WHERE idproduct=".$_GET['id']."";        
        $resultado_img = mysqli_query($conexion, $peticion_img);

        $val = "";
        $val2 = "";
        if ( $fila['activado'] == 1 ) {
          $val = "checked";
        } else {
          $val2 = "checked";
        }

// var_dump($fila);
    ?>


        <div class="inner-container"> 

          <form action="updateproduct.php?id=<?= $fila['id'];?>" method="POST" role="form" data-parsley-validate>
          
            <div class="panel panel-info">

              <div class="panel-heading">Producto: <?= $fila['nombre'];?></div>
              <div class="panel-body">
                

                  <div class="block-group col-sm-6">
                    <div class="form-group">
                      <label for="nameProd">Nombre del producto</label>
                      <input type="text" class="form-control" name="nombre" id="nameProd" value="<?= $fila['nombre'];?>" placeholder="Nombre del producto" data-parsley-required>
                    </div>

                    <div class="form-group">
                      <label for="priceProd">Precio</label>
                      <input type="text" class="form-control" id="priceProd" name="precio" value="<?= $fila['precio'];?>" placeholder="Precio" data-parsley-required >
                    </div>

                    <div class="form-group">
                      <label for="stockProd">Stock</label>
                      <input type="text" class="form-control" id="stockProd" name="existencias" value="<?= $fila['existencias'];?>" placeholder="Enter Stock" data-parsley-required data-parsley-type="digits">
                    </div>
                    
                    <div class="form-group">
                      <label for="descProd">Descripci&oacute;n</label>
                      <textarea class="form-control" id="descProd" rows="3" name="descripcion" data-parsley-required><?= $fila['descripcion'];?></textarea>
                    </div>
                  </div>

                  <div class="block-group col-sm-6">

                    <div class="form-group">
                      <div><label>Activado</label></div>
                      <label class="radio-inline">
                        <input type="radio" id="statetrue" name="activado" value="1"  <?= $val;?> data-parsley-required> Si
                      </label>
                      <label class="radio-inline">
                        <input type="radio" id="statefalse" name="activado" value="0" <?= $val2;?>> No
                      </label>
                    </div>
    
                  <?php while($fila_img = mysqli_fetch_array($resultado_img)) { ?>

                    <div class="form-group form-img">
                      <figure class="wrap-img">
                        <img src="../photo/<?=  $fila_img['imagen'];?>" alt="" class="img-thumbnail">
                        <figcaption><?= $fila['nombre'];?></figcaption>
                      </figure>
                    </div>  

                    <?php } ?>   

                    <div class="form-group">
                      <label for="imageProd">Agregar mas imagenes</label>
                      <input type="file" id="imageProd" name="imagen">
                      <p class="help-block">Puede agregar 1 o mas imagenes de tipo jpg, jpeg, png, gif</p>
                    </div>

                  </div>


              </div>
              <div class="panel-footer clearfix">                   
                <button type="submit" class="pull-right btn btn-success">Guardar</button>
              </div>
            </div>
          </form>


        </div>





<?php mysqli_close($conexion); 

      include "footer.php";
?>

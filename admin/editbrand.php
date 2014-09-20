
    <?php 

      include "header.php";
      include "../php/config.php";

        $conexion  = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
        mysqli_set_charset($conexion, "utf8");
        
        $peticion  = "SELECT * FROM brand WHERE id=".$_GET['id'].""; 
        $resultado = mysqli_query($conexion, $peticion);
        $fila      = mysqli_fetch_array($resultado);

// var_dump($fila);
    ?>

        <div class="inner-container"> 

          <form action="updatebrand.php?id=<?= $fila['id'];?>" method="POST" role="form" enctype="multipart/form-data" data-parsley-validate>
          
            <div class="panel panel-info">

              <div class="panel-heading">Producto: <?= $fila['name'];?></div>
              <div class="panel-body">
                

                  <div class="block-group col-sm-6">
                    <div class="form-group">
                      <label for="nameProd">Nombre del producto</label>
                      <input type="text" class="form-control" name="name" id="nameProd" value="<?= $fila['name'];?>" data-parsley-required>
                    </div>
                
                    <div class="form-group">
                      <label for="descProd">Descripci&oacute;n</label>
                      <textarea class="form-control" id="descProd" rows="3" name="descripcion" data-parsley-required><?= $fila['descripcion'];?></textarea>
                    </div>
                  </div>

                  <div class="block-group col-sm-6">
    
                    <div class="form-group form-img">
                      <figure class="wrap-img">
                        <img src="../photo/brand/<?=  $fila['imagen'];?>" alt="">                       
                      </figure>
                    </div>  

                    <div class="form-group">
                      <label for="imageProd">Cambiar imagen</label>
                      <input type="file" id="imageProd" name="imagen">
                      <p class="help-block">Puede agregar 1 imagen de tipo jpg, jpeg, png, gif</p>
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

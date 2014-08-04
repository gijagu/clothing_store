
    <?php 

      $pedidos   = "";
      $clientes  = "";
      $productos = "active";
      $marcas    = "";

      include "header.php";
      include "../php/config.php";
    

      $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));

      mysqli_set_charset($conexion, "utf8");

      $peticion = "SELECT * FROM products";

      $resultado = mysqli_query($conexion, $peticion);
    ?>


        <div class="inner-container">
            <div>              
              <button id="btn-add-item" data-item="#add-item" type="button" class="btn btn-info">Agregar Producto</button>
            </div>            
            <br>
            <div id="add-item" class="panel panel-default" style="display:none">

              <!-- Default panel contents -->
              <form action="addnewproduct.php" method="post" role="form" enctype="multipart/form-data" data-parsley-validate>

                <div class="panel-heading">Nuevo Producto</div>
                <div class="panel-body">
                  

                    <div class="block-group col-sm-6">
                      <div class="form-group">
                        <label for="nameProd">Nombre del producto</label>
                        <input type="text" class="form-control" name="nombre" id="nameProd" placeholder="Nombre del producto" data-parsley-required>
                      </div>

                      <div class="form-group">
                        <label for="priceProd">Precio</label>
                        <input type="text" class="form-control" id="priceProd" name="precio" placeholder="Precio" data-parsley-required >
                      </div>

                      <div class="form-group">
                        <label for="stockProd">Stock</label>
                        <input type="text" class="form-control" id="stockProd" name="existencias" placeholder="Enter Stock" data-parsley-required data-parsley-type="digits">
                      </div>
                      
                      <div class="form-group">
                        <label for="descProd">Descripci&oacute;n</label>
                        <textarea class="form-control" id="descProd" rows="3" name="descripcion" data-parsley-required></textarea>
                      </div>
                    </div>

                    <div class="block-group col-sm-6">


                      <div class="form-group">
                        <div><label>Activado</label></div>
                        <label class="radio-inline">
                          <input type="radio" id="statetrue" name="activado" value="1" data-parsley-required> Si
                        </label>
                        <label class="radio-inline">
                          <input type="radio" id="statefalse" name="activado" value="0"> No
                        </label>
                      </div>      

                      <div class="form-group">
                        <label for="imageProd">Imagen</label>
                        <input type="file" id="imageProd" name="imagen" >
                        <p class="help-block">Puede agregar 1 o mas imagenes de tipo jpg, jpeg, png, gif</p>
                      </div>

                    </div>


                </div>
                <div class="panel-footer clearfix">                   
                  <button type="submit" class="pull-right btn btn-success">Guardar</button>
                </div>
              </form>
            </div>


        </div>
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Panel heading</div>
          <div class="panel-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, tenetur, at, voluptates, suscipit hic odio voluptatum in provident excepturi veritatis repudiandae nihil explicabo amet totam quo itaque quis natus quam.</p>
            <!-- Table -->
          </div>

          <table class="table table-bordered">
            <tr>
              <th>Nombre del producto</th>
              <th>Precio</th>
              <th>Descripcion</th>
              <th>Stock</th>
              <th>Activado</th>
              <th></th>
              <th></th>
            </tr>
          <?php 
              while ($fila = mysqli_fetch_array($resultado)) {
          ?>
            <tr>
              <form action="updateproduct.php?id=<?= $fila['id'];?>" method="POST">
                <td><?= $fila["nombre"]; ?></td>
                <td><?= $fila["precio"]; ?></td>
                <td><?= $fila["descripcion"]; ?></td>
                <td><?= $fila["existencias"]; ?></td>
                <td><?= $fila["activado"]; ?></td>
                <td>
                  <a href="editproduct.php?id=<?= $fila['id'];?>" class="btn btn-default btn-lg btn-info"><span class="glyphicon glyphicon-wrench"></span></a>                  
                </td>
                <td>
                  <a href="removeproduct.php?id=<?= $fila['id'];?>" class="btn btn-default btn-lg btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </form>
            </tr>
          <?php } ?>

          </table>
        </div>





<?php mysqli_close($conexion); 

      include "footer.php";
?>

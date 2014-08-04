
    <?php 

      $pedidos   = "";
      $clientes  = "";
      $productos = "";
      $marcas    = "active";

      include "header.php";
      include "../php/config.php";

      $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));

      mysqli_set_charset($conexion, "utf8");

      $peticion = "SELECT * FROM brand";

      $resultado = mysqli_query($conexion, $peticion);
    ?>


        <div class="inner-container">
            <div>              
              <button id="btn-add-item" data-item="#add-item" type="button" class="btn btn-info">Agregar Nueva Marca</button>
            </div>            
            <br>
            <form action="addnewbrand.php" method="post" role="form" enctype="multipart/form-data" data-parsley-validate>
              <div id="add-item" class="panel panel-info" style="display:none">

                <!-- Default panel contents -->

                  <div class="panel-heading">
                      <h4 class="text-center">Nueva Marca</h4>  
                  </div>
                  <div class="panel-body">
                    

                      <div class="block-group col-sm-6">
                        <div class="form-group">
                          <label for="nameProd">Nombre</label>
                          <input type="text" class="form-control" name="nombre" id="nameProd" placeholder="Nombre del producto" data-parsley-required>
                        </div>
                        
                        <div class="form-group">
                          <label for="descProd">Descripci&oacute;n</label>
                          <textarea class="form-control" id="descProd" rows="3" name="descripcion" data-parsley-required></textarea>
                        </div>
                      </div>

                      <div class="block-group col-sm-6">
                    

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
              </div>
            </form>


        </div>
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Listado de marcas</div>
          <div class="panel-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, tenetur, at, voluptates, suscipit hic odio voluptatum in provident excepturi veritatis repudiandae nihil explicabo amet totam quo itaque quis natus quam.</p>
            <!-- Table -->
          </div>

          <table class="table table-bordered">
            <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Imagen</th>
              <th></th>
              <th></th>
            </tr>
          <?php 
              while ($fila = mysqli_fetch_array($resultado)) {
          ?>
            <tr>
              <form action="updateproduct.php?id=<?= $fila['id'];?>" method="POST">
                <td><?= $fila["nombre"]; ?></td>
                <td><?= $fila["descripcion"]; ?></td>
                <td><?= $fila["imagen"]; ?></td>
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

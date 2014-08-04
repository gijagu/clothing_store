
    <?php 

      $pedidos   = "";
      $clientes  = "active";
      $productos = "";
      $marcas    = "";

      include "header.php";
      include "../php/config.php";


      $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
      mysqli_set_charset($conexion, "utf8");

      $peticion = "SELECT * FROM customers";

      $resultado = mysqli_query($conexion, $peticion);

    ?>


        <div class="inner-container">
            <div>              
              <button id="btn-add-item" data-item="#add-item" type="button" class="btn btn-info">Agregar Nuevo Cliente</button>
            </div>            
            <br>
            <div id="add-item" class="panel panel-default" style="display:none">
              <!-- Default panel contents -->

              <form action="addcustomer.php" method="POST" role="form" data-parsley-validate>
                <div class="panel panel-info">
                  <!-- Default panel contents -->           

                    <div class="panel-heading"><h2>Nuevo Cliente</h2></div>
                    <div class="panel-body">                  

                        <div class="block-group col-sm-6">
                          <div class="form-group">
                            <label for="costumer-name">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="costumer-name" placeholder="Nombre" data-parsley-required>
                          </div>

                          <div class="form-group">
                            <label for="costumer-e">Email</label>
                            <input type="email" class="form-control" id="costumer-e" name="email" placeholder="Email" data-parsley-required data-parsley-type="email">
                          </div>
                          
                          <div class="form-group">
                            <label for="costumer-user">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="costumer-user" name="usuario" placeholder="Nombre de Usuario"  data-parsley-required >
                          </div>



                          <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" >
                          </div>

                          <div class="form-group">
                            <label for="pais">Pa&iacute;s</label>
                            <input type="text" class="form-control" id="pais" name="pais" placeholder="País">
                          </div>

                        </div>

                        <div class="block-group col-sm-6">

                          <div class="form-group">
                            <label for="costumer-ln">Apellidos</label>
                            <input type="text" class="form-control" id="costumer-ln" name="apellidos" placeholder="Apellidos" data-parsley-required >
                          </div>

                          <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="text" class="form-control" id="dni" name="dninif" placeholder="DNI" >
                          </div>

                          <div class="form-group">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" data-parsley-required>
                          </div>

                          <div class="form-group">
                            <label for="movil">Movil</label>
                            <input type="text" class="form-control" id="movil" name="movil" placeholder="Movil" >
                          </div>

                        </div>


                    </div>

                    <div class="panel-footer clearfix">                   

                      <button type="submit" class="pull-right btn btn-default btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk"></span></button>

                    </div>
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
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Email</th>
              <th>Nombre de Usuario</th>
              <th>Telefono</th>
              <th>Movil</th>
              <th>Pa&iacute;s</th>
              <th>DNI</th>
              <th></th>
              <th></th>
            </tr>
          <?php 
              while ($fila = mysqli_fetch_array($resultado)) {
          ?>
            <tr>

                <td>
                  <?= $fila["nombre"]; ?>
                </td>

                <td>
                  <?= $fila["apellidos"]; ?>
                </td>

                <td>
                  <?= $fila["email"]; ?>
                </td>

                <td>
                  <?= $fila["usuario"]; ?>
                </td>

                <td>
                  <?= $fila["telefono"]; ?>
                </td>

                <td>
                  <?= $fila["movil"]; ?>
                </td>


                <td>
                  <?= $fila["pais"]; ?>
                </td>

                <td>
                  <?= $fila["dninif"]; ?>
                </td>
                
                <td>
                  <a href="editcustomers.php?id=<?= $fila['id'];?>" class="btn btn-default btn-lg btn-info"><span class="glyphicon glyphicon-wrench"></span></a>                  
                </td>
                <td>
                  <a href="removecustomer.php?id=<?= $fila['id'];?>" class="btn btn-default btn-lg btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
          <?php } ?>

          </table>
        </div>





<?php mysqli_close($conexion); 

      include "footer.php";
?>


    <?php 

      include "header.php";
      include "../php/config.php";

        $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
        mysqli_set_charset($conexion, "utf8");

        $peticion = "SELECT * FROM customers WHERE id=".$_GET['id']."";

        $resultado = mysqli_query($conexion, $peticion);
        $fila = mysqli_fetch_array($resultado);
// var_dump($fila);
    ?>


        <div class="inner-container">
          
          <form action="updatecustomer.php?id=<?= $fila['id'];?>" method="POST" data-parsley-validate>
            <div id="add-item" class="panel panel-info">
              <!-- Default panel contents -->           

                <div class="panel-heading"><h2>Cliente: <?= $fila['nombre'].' '. $fila['apellidos'];?> </h2></div>
                <div class="panel-body">                  

                    <div class="block-group col-sm-6">
                      <div class="form-group">
                        <label for="costumer-name">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="costumer-name" placeholder="Nombre" value="<?= $fila['nombre'];?>" data-parsley-required>
                      </div>

                      <div class="form-group">
                        <label for="costumer-e">Email</label>
                        <input type="email" class="form-control" id="costumer-e" name="email" placeholder="Email" value="<?= $fila['email'];?>" data-parsley-required data-parsley-type="email">
                      </div>
                      
                      <div class="form-group">
                        <label for="costumer-user">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="costumer-user" name="usuario" placeholder="Nombre de Usuario" value="<?= $fila['usuario'];?>" data-parsley-required >
                      </div>



                      <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?= $fila['telefono'];?>">
                      </div>

                      <div class="form-group">
                        <label for="pais">Pa&iacute;s</label>
                        <input type="text" class="form-control" id="pais" name="pais" placeholder="País" value="<?= $fila['pais'];?>">
                      </div>

                    </div>

                    <div class="block-group col-sm-6">

                      <div class="form-group">
                        <label for="costumer-ln">Apellidos</label>
                        <input type="text" class="form-control" id="costumer-ln" name="apellidos" placeholder="Apellidos" value="<?= $fila['apellidos'];?>" data-parsley-required >
                      </div>

                      <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dninif" placeholder="DNI" value="<?= $fila['dninif'];?>">
                      </div>

                      <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" value="<?= $fila['contrasena'];?>" data-parsley-required>
                      </div>

                      <div class="form-group">
                        <label for="movil">Movil</label>
                        <input type="text" class="form-control" id="movil" name="movil" placeholder="Movil" value="<?= $fila['movil'];?>">
                      </div>

                      
                    </div>


                </div>

                <div class="panel-footer clearfix">                   


                  <button type="submit" class="pull-right btn btn-default btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk"></span></button>

                  <a href="removecustomer.php?id=<?= $fila['id'];?>" class="pull-right btn btn-default btn-lg btn-danger"><span class="glyphicon glyphicon-remove"></span></a>

                </div>
            </div>
          </form>


        </div>





<?php mysqli_close($conexion); 

      include "footer.php";
?>

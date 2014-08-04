
    <?php 

      $pedidos   = "active";
      $clientes  = "";
      $productos = "";
      $marcas    = "";      

      include "header.php";
      include "../php/config.php";


      $conexion = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
      mysqli_set_charset($conexion, "utf8");

      $peticion = "SELECT pedidos.id AS idpedido,fecha,estado,nombre,apellidos FROM pedidos LEFT JOIN clientes ON pedidos.idcliente = clientes.id ORDER BY estado,fecha ASC";

      $resultado = mysqli_query($conexion, $peticion);
    ?>



          <table class="table table-bordered">
          <?php 
              while ($fila = mysqli_fetch_array($resultado)) {
                  $estado = $fila['estado'];

                  switch ($estado) {
                    case 0:
                      $diestado = 'fa-exclamation-circle';
                      $state = 'danger';
                      break;
                    case 1:
                      $diestado = 'fa-check-circle';
                      $state = 'success"';
                      break;
                      case 2:
                        $diestado = 'fa-info-circle';
                        $state = 'warning';
                        break;
                  }

                ?> 
                  <tr class ="'.$state.'">
                    <td><?= $fila["nombre"].' '.$fila['apellidos']; ?></td>
                    <td><?= date("M d Y H:i:s", $fila["fecha"]); ?></td>
                    <td class="text-center">
                      <i class="fa <?= $diestado; ?>"></i>
                    </td>
                    <td class="text-center"> 
                      <a class="btn btn-info" href="gestionpedido.php?id=<?= $fila['idpedido']; ?>">
                        <i class="fa fa-cogs"></i>
                      </a>
                    </td>
                    <td class="text-center"> 
                      <a class="btn btn-success" href="../php/orderserved.php?id=<?= $fila['idpedido']; ?>">
                        <i class="fa fa-truck"></i>
                      </a>
                    </td>
                    <td class="text-center"> 
                      <a class="btn btn-danger" href="../php/ordercancel.php??id=<?= $fila['idpedido']; ?>">
                        <i class="fa fa-times"></i>
                      </a>
                    </td>
                  </tr>
          <?php 
              }
          ?>

          </table>

<?php mysqli_close($conexion); 

      include "footer.php";
?>

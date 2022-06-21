            <?php
                $inc = include("basededatos.php");

                    if($inc) {
                    $consulta = "SELECT id, nombre_cuenta FROM cuentas";
                    $resultado = mysqli_query($conexion,$consulta);
                    if($resultado) {
                        while($fila = $resultado -> fetch_array()) {
                            $nombreCuenta= $fila['nombre_cuenta'];
                           
                           
                            $idCuenta = $fila['id'] ;
                        
                            ?>
                            
                            <tr>
                            <td><?php echo $nombreCuenta;?></td>
                            <td><div class="category-actiones"><a href="modificarCuenta.php?cuenta=<?php echo $idCuenta?>" id="category-edit"><i class="fa-solid  r fa-pen-to-square"></i></a> <a href="eliminarCuenta.php?cuenta=<?php echo $idCuenta?>"  class="category-delete"><i class="fa-solid fa-trash-can"></i></a></div></td>
                            </tr>
                            <?php
                        }
                    }
                }
            ?>
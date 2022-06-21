<?php
                $inc = include("basededatos.php");

                    if($inc) {
                    $consulta = "SELECT * FROM movimientos,categorias,cuentas WHERE movimientos.cuenta_id = cuentas.id AND movimientos.categoria_id = categorias.id;
                    ";
                    $resultado = mysqli_query($conexion,$consulta);
                    if($resultado) {
                        while($fila = $resultado -> fetch_array()) {
                            $idMovimiento = $fila['id_movimiento'];
                            $valorMovimiento = $fila['valor_movimiento'];
                            $detalleMovimiento = $fila['detalle'];
                            $categoriaMovimiento= $fila['nombre_categoria'] ;
                            $cuentaMovimiento= $fila['nombre_cuenta'] ;

                            
                            ?>
                                <tr>
                                    <td><?php echo $idMovimiento; ?></td>
                                    <td>$<?php echo $valorMovimiento; ?></td>
                                    <td><?php echo $categoriaMovimiento; ?></td>
                                    <td><?php echo $cuentaMovimiento; ?></td>
                                    <td><?php echo $detalleMovimiento; ?></td>

                                    <td><div class="category-actiones"><a href="modificarMovimiento.php?id=<?php echo $idMovimiento; ?>" id="category-edit"><i class="fa-solid  r fa-pen-to-square"></i></a> <a href="eliminarMovimiento.php?mov=<?php echo $idMovimiento;?>" class="category-delete"><i class="fa-solid fa-trash-can"></i></a></div></td>
                                </tr>
                            <?php
                        }
                    }
                }
            ?>
            <!-- <a href=""  class="category-delete"><i class="fa-solid fa-trash-can"></i></a> -->
            
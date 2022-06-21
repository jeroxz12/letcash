<?php
                $inc = include("basededatos.php");

                    if($inc) {
                    $consulta = "SELECT id, nombre_cuenta FROM cuentas";
                    $resultado = mysqli_query($conexion,$consulta);
                    if($resultado) {
                        while($fila = $resultado -> fetch_array()) {
                            $nombreCuenta = $fila['nombre_cuenta'];
                           
                            $idCuenta = $fila['id'] ;
                            
                            ?>
                           <option value="<?php echo $idCuenta;?>"><?php echo $nombreCuenta;?></option>
                            <?php
                        }
                    }
                }
            ?>
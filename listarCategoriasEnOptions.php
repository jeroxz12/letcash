<?php
                $inc = include("basededatos.php");

                    if($inc) {
                    $consulta = "SELECT id, nombre_categoria, tipo FROM categorias";
                    $resultado = mysqli_query($conexion,$consulta);
                    if($resultado) {
                        while($fila = $resultado -> fetch_array()) {
                            $nombreCategoria = $fila['nombre_categoria'];
                            $tipoCategoria = $fila['tipo'];
                            $idCategoria = $fila['id'] ;
                            
                            ?>
                           <option value="<?php echo $idCategoria;?>"><?php echo $nombreCategoria;?> - <?php echo $tipoCategoria;?> </option>
                            <?php
                        }
                    }
                }
            ?>
            <!-- <a href=""  class="category-delete"><i class="fa-solid fa-trash-can"></i></a> -->
            
            
           
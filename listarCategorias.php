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
                            <tr>
                            <td><?php echo $nombreCategoria;?></td>
                            <td><?php  echo $tipoCategoria ?></td>
                            <td><div class="category-actiones"><a href="modificarCategoria.php?cat=<?php echo $idCategoria ?>" id="category-edit"><i class="fa-solid  r fa-pen-to-square"></i></a> <a href="eliminarCategoria.php?cat=<?php echo $idCategoria ?>"  class="category-delete"><i class="fa-solid fa-trash-can"></i></a></div></td>
                            </tr>
                            <?php
                        }
                    }
                }
            ?>
            <!-- <a href=""  class="category-delete"><i class="fa-solid fa-trash-can"></i></a> -->
            
            
           
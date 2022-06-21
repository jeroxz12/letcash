<?php 

$menu = array ('Inicio' , 'Categorias', 'Cuentas', 'Contacto' );
$contador = count($menu);

?>

<header>
  <p>LETCASH</p>
   <nav>
      <ul>
       <?php
          for ($i = 0; $i < $contador; $i++){
            if ( $i == 0 ) {
               echo "<li><a href=index.php>";
               echo $menu[$i];
               echo "</a></li>";
            }
           if ( $i == 1 ) {
               echo "<li><a href=categorias.php>";
               echo $menu[$i];
               echo "</a></li>";
            }
            if ( $i == 2 ) {
               echo "<li><a href=cuentas.php>";
               echo $menu[$i];
               echo "</a></li>";
            }
            if ( $i == 3 ) {
               echo "<li><a href=contacto.php>";
               echo $menu[$i];
               echo "</a></li>";
            }
          }
       ?>
      </ul>
   </nav>
</header>
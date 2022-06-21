<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca93a26925.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Categoria eliminada</title>
</head>
<body>
    
</body>
</html>


<?php 

include("basededatos.php");

if(isset($_GET["cat"])) {
    $codigo = $_GET["cat"];
    $consulta = "DELETE FROM categorias WHERE id='$codigo'";
    if(mysqli_query($conexion,$consulta)) {
                        echo '<div class="msj-cat-edited-container">';
     
                        echo '<h1>Categoria eliminada exitosamente</h1>';
                        echo '<a href="categorias.php" class="cat-list-back">Volver a la lista de categorias</a>';
                        echo '</div>';
    } else {
        echo "La consulta tiene errores";
    }

}


?>

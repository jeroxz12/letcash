<!doctype html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca93a26925.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/styles.css">
	<title>Modifica un movimiento</title>
</head>
<body>
<div id="menu">
<?php
$inc = include('basededatos.php');
if($inc ){
	
	
		
		if( isset($_POST["valor"]) and isset($_POST["detalle"] ) and isset($_POST["cuenta"] ) and isset($_POST["categoria"] ) and isset($_POST["codigoCuenta"] )){
			$valor = $_POST["valor"];
			$detalle = $_POST["detalle"];
            $cuenta = $_POST["cuenta"];
            $categoria = $_POST["categoria"];
            $codigo = $_POST["codigoCuenta"];
		    $consulta = "UPDATE movimientos SET valor_movimiento = '$valor', detalle = '$detalle', categoria_id = '$categoria', cuenta_id = '$cuenta' WHERE id_movimiento = '$codigo'";
		
		if ( mysqli_query($conexion, $consulta) ){
				
				echo '<div class="msj-cat-edited-container">';
						
                echo '<h1>Movimiento editado exitosamente</h1>';
                echo '<a href="index.php" class="cat-list-back">Volver a la lista de movimientos</a>';
				
				echo '</div>';
		} else {
			echo "La consulta tiene errores";
		}

        }
    }
?>

</div>

</body>
</html>
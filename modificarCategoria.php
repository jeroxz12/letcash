<!doctype html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ca93a26925.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
	<title>Portada de una categoria</title>
</head>
<body>
<div id="menu">
<?php

$inc = include('basededatos.php');
if($inc){
	
	
		
		
		if( isset($_GET["cat"]) ){
		$codigo = $_GET["cat"];
		// 3. Ejecutar una consulta SQL
		$consulta = "SELECT id,nombre_categoria,tipo FROM categorias WHERE id='$codigo'";
		if ( $resultado = mysqli_query($conexion, $consulta) ){
		     $fila = mysqli_fetch_array($resultado);
			 
             echo '<div class="category-edit-form-container">';

			 echo '<form action="modificarCategoria2.php" class="category-edit-form" method="post">';

            echo '<h1>Editar categoria</h1>';


			 
			 
			echo '<input type="text" class="category-edit-name-input" name="nombreCategoria" value="';
			echo $fila["nombre_categoria"];
			echo '">';

			
			echo '<div class="category-edit-radios">';

			echo '<label for="Gasto">Gasto</label>';
			echo '<input id="radio-btn" name="tipoCategoria"  type="radio" value="Gasto">';

			echo '<label for="Egreso">Ingreso</label>';
			echo '<input id="radio-btn" type="radio" name="tipoCategoria"  value="Ingreso">';
			
			echo '</div>';
			
			echo '<input type="hidden" name="codigoCategoria" value="'.$fila["id"].'">';
		
			echo '<button type="submit">Editar</button>
			 </form>';
			echo '</div>';
		
		} 
	
	
	
} 
}
?>

</div>

</body>
</html>
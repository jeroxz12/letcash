

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
    <title>Categorias</title>
</head>
<body style="font-family: 'Montserrat', sans-serif;">
    <?php 
    require_once('header.php');
    ?> 
    <div class="container">
   <section class="modal">
       <div class="modal-container">
           <h3 class="modal-title">Agregar categoria</h3>
           <div class="category-options"> 
               <form action="agregarCategoria.php" method="post">
               <div class="radios">
                        <label for="Gasto">Gasto</label>
                        <input id="radio-btn1" name="tipoCategoria"  type="radio" value="Gasto"  >
                    
                    
                        <label for="Egreso">Ingreso</label>
                        <input id="radio-btn2" type="radio" name="tipoCategoria"  value="Ingreso" >
                        
                </div>
                    <div class="text">
                        <label for="nombre-categoria">Nombre de la categoria:</label>
                        <input type="text" class="category-name" name="nombreCategoria">
                    </div>
                    <div class="modal-botones">
                    <input type="submit" class="modal-add-category" value="Agregar">
                    <a href="#" class="modal-close">Cerrar</a>
                    </div>
                </form>
           </div>
           
       </div>
   </section>
   
    <div class="container">
    
            <div class="category-button">
              <button class="button-add" id="open">Nueva Categoria</button>
            </div>
        <table class="categories-table">
        
            <tr>
                <th>Categoria</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        <tbody>
            <?php
               include("listarCategorias.php");
            ?>
       </tbody>   
        </table>
    </div>

    </div>




    <?php 
    require_once('footer.php');
    ?>
    <script src="js/modal-categoria.js"></script>
    <script src="js/radio-buttons.js"></script>
</body>
</html>
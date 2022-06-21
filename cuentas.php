<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ca93a26925.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cuentas</title>
</head>
<body>
    <?php 
    require_once('header.php');
    ?>
    <div class="container">
    <section class="modal">
       <div class="modal-container">
        <form action="agregarCuenta.php" method="post">
           <h3 class="modal-title">Agregar cuenta</h3>
           <div class="account-options"> 
                        <label for="nombreCuenta">Nombre de la cuenta:</label>
                        <input type="text" class="account-name" name="nombreCuenta">
                        <label for="nombreCuenta">Saldo inicial de la cuenta:</label>
                        <input type="number" class="account-name" name="saldoCuenta">
           </div>
           <div class="modal-account-botones">
               <input type="submit" class="modal-add-account" value="Agregar">
               <a href="#" class="modal-close">Cerrar</a>
        </div>
        </form>
       </div>
   </section>
    <div class="container">
    
            <div class="account-button">
              <button class="button-add" id="open">Nueva Cuenta</button>
            </div>
        <table class="accounts-table">
        
            <tr>
                <th>Cuenta</th>
                
                <th>Acciones</th>
            </tr>
            <tbody>
                <?php 
                 include("listarCuentas.php"); 
                ?>
            </tbody>
        </table>
    </div>

    </div>
    <?php 
    require_once('footer.php');
    ?>
    <script src="js/modal-cuenta.js"></script>
</body>
</html>

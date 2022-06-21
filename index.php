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
    <link rel="stylesheet" href="css/styles.css" >

    <title>Inicio</title>
</head>
<body>
    <?php 
      require_once('header.php');
      ?>
<div class="container">
<section class="modal">
  <div class="modal-container">
         <form action="agregarMovimiento.php" method="post">
           <h3 class="modal-title">Agregar movimiento</h3>
           <div class="movement-options"> 
             <div class="selects">
               <div class="select-cuenta">
               <label for="cuenta">Cuenta</label>
               <select name="cuenta" id="select-cuentas">
               <?php include('listarCuentasEnOptions.php'); ?>
               </select>
               </div>
               <div class="select-categoria">
               <label for="categoria">Categoria</label>
               <select name="categoria" id="select-categorias">
                 <?php include('listarCategoriasEnOptions.php'); ?>
               </select>
               </div>
               </div>
               <div class="inputs">
               <label for="detalle">Detalle</label>
               <input type="text" name="detalle">
               <label for="valor">Valor</label>
               <input type="number" name="valor" placeholder="$">
               </div>
           </div>
           <div class="botones">
               <input type="submit" value="Agregar">
               <a href="#" class="modal-close">Cerrar</a>
        </div>
      </form>
       </div>
   </section>
          <section class="main">
            <div class="accounts-container">
              <div class="account">
                <p class="account-name">Total</p>
                <p class="account-balance">$134000</p>
              </div>
              <div class="account">
                <p class="account-name">Mercado Pago</p>
                <p class="account-balance">$120000</p>
              </div>
              <div class="account">
                <p class="account-name">Banco Nacion</p>
                <p class="account-balance">$14000</p>
              </div>
            </div>
          </section>
          
          <section class="movements-container main">
            <div class="movement-button">
              <button class="button-add" id="open">Nuevo Movimiento</button>
              <button class="button-print">PDF</button>
            </div>
            
            <table class="movements-table">
              <tr class="table-row">
                <th>ID</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Cuenta</th>
                <th>Detalle</th>
                <th>Acciones</th>
              </tr>
             <tbody>
              <?php include('listarMovimientos.php'); ?>
             </tbody>
            </table>
          </section>


          </div>
      <?php
      require_once('footer.php');
    ?>
    <script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/1szip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/8.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/11bs/pdfmake/8.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js"></script>
    <script src="js/modal-movimiento.js"></script>
</body>
</html>
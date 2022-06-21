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
    <title>Contacto</title>
</head>
<body>
  
    <?php 
      require_once('header.php');
    ?>
    
    <div class="form-container">
  
  <form action="recibir.php" method="POST" class="contact-form">
            <h1 class="form-container">Contactanos</h2>
            <input id="nombre" required type="text" class="form-name-input" placeholder="Nombre:" name="nombre"  title="Por favor ingresa un nombre correcto" >
            <input id="apellido" required type="text" class="form-surname-input" placeholder="Apellido:" name="apellido"  title="Por favor ingresa un apellido correcto" >
            <input id="telefono" required type="tel class="form-phone-input" placeholder="Telefono:" name="telefono"  title="Por favor ingresa un telefono correcto" ">
            <input id="email" required type="email" class="form-email-input" placeholder="E-mail:" name="email"  title="Email invalido. Prueba con otro" >
            <textarea  class="form-input form-mensaje-input" required placeholder="Mensaje" id="mensaje" name="mensaje" title="Por favor ingresa un mensaje"></textarea>
            <div class="radio-container">
            <input type="radio" id="radio-accept" value="accept-terms" name="accept-terms">
            <p>Acepto los terminos y condiciones.</p>
            </div>
            <input type="submit" onclick=""  value="Enviar" class="btn-form">
            
    </form>
    </div>
    
    <?php 
      require_once('footer.php');
    ?>
     <script src="js/validar-formulario.js"></script>
</body>
</html>
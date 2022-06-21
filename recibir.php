<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LetCash</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php require_once('header.php'); ?>
<div class="container">
<div class="container-tabla">
    <h2>Estos son los datos que enviaste:</h2>
<table class="tabla-recibir">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Mensaje</th>
    </tr>
    <tr>
        <td><?php if(isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            echo "$nombre"; }
            ?>
        </td>
        <td><?php if(isset($_POST['apellido'])) {
            $apellido = $_POST['apellido'];
            echo "$apellido"; }
            ?>
        </td>
        <td><?php if(isset($_POST['telefono'])) {
            $telefono = $_POST['telefono'];
            echo "$telefono"; }
            ?>
        </td>
        <td><?php if(isset($_POST['email'])) {
            $email = $_POST['email'];
            echo "$email"; }
            ?>
        </td>
        <td><?php if(isset($_POST['mensaje'])) {
            $mensaje = $_POST['mensaje'];
            echo "$mensaje"; }
            ?>
        </td>
    </tr>
</table>
    <a href="index.php" class="volver-index">Volver a la pagina principal</a>
</div>
</div>
<?php require_once('footer.php'); ?>
</body>
</html>
<?php
    
            $destinatario = "jerolago86@gmail.com";
            $nombreCorreo = $_POST['nombre'];
            $asunto = "Consulta PHP";
            $mensajeCorreo = $mensaje;
            $emailCorreo = $email;
            $header = "Enviado desde la pagina de LetCash";
            $mensajeCompleto = $mensajeCorreo . "\nAtentamente: " . $nombreCorreo;
            

            if(mail($destinatario, $asunto,$mensajeCompleto, $header)){
                echo "<script>alert('Consulta enviada exitosamente')</script>";
            } else {
                echo "<script>alert(Error al enviar')</script>";
            }
?>
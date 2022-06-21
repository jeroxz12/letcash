<?php 
    require('contacto.php');
    
            $destinatario = 'jerolago86@gmail.com';
            $nombre = $_POST['nombre'];
            $asunto = "Consulta PHP";
            $mensaje = $_POST['mensaje'];
            $email = $_POST['email'];
            $header = "Enviado desde la pagina de LetCash";
            $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
            echo $destinatario;
            echo $mensajeCompleto;
            echo $asunto;

            if(mail($destinatario, $asunto,$mensajeCompleto, $header)){
                echo "<script>alert('Consulta enviada exitosamente')</script>";
            } else {
                echo "<script>alert(Error al enviar')</script>";
            }
?>
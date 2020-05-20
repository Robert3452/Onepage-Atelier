<?php

if(isset($_POST["name"]) && !empty($_POST['name']) && 
            isset($_POST["phone_number"]) && !empty($_POST['phone_number']) &&
            isset($_POST["email"]) && !empty($_POST['email']) &&
            isset($_POST["service"]) && !empty($_POST['service'])){
    //Llamando a los campos
    $nombre = $_POST['name'];
    $tel = $_POST['phone_number'];
    $email = $_POST['email'];
    $mensaje = $_POST['service'];
    $detalle = $_POST['detail'];
    //Datos del correo
    
    $destinatario="eduardo@atelier570.com";
    $destinatario1='ebt@btyptcontratistas.com';
    $ruth ="ruth@evanzu.com";
    $robert ="robert@evanzu.com";
    $asunto = "Solicitud de cotizaci贸n:";

    $carta = "De: $nombre \n";
    $carta .= "Correo: $email\n";
    $carta .= "Telefono: $tel\n";
    $carta .= "Pregunta por: $mensaje";
    if(!empty($_POST['detail'])){
        $carta .= "\nDetalle: $detalle";

    }

    
    //Envio de mensaje
    mail($robert, $asunto, $carta);
    mail($ruth, $asunto, $carta);
    mail($destinatario, $asunto, $carta);
    mail($destinatario1, $asunto, $carta);
     header("Status: 200 Moved Permanently");
    header('Location: https://atelier570.com');
}

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
require 'assets/PHPMailer/Exception.php';
require 'assets/PHPMailer/PHPMailer.php';
require 'assets/PHPMailer/SMTP.php';
require 'assets/PHPMailer/PHPMailerAutoload.php';


function validate($campo){

    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
}

//Se valida que todos los campos esten llenos
if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
isset($_POST["asunto"]) && !empty($_POST["asunto"]) &&
isset($_POST["email"]) && !empty($_POST["email"]) &&
isset($_POST["mensaje"]) && !empty($_POST["mensaje"])){
    

    //Se leen los datos
    $nombre = validate($_POST["nombre"]);
    $email = validate($_POST["email"]);
    $asunto = validate($_POST["asunto"]);
    $mensaje = validate($_POST["mensaje"]);

    //Contenido
    $contenido = "<strong>Nombre:</strong> ".$nombre."<br><strong>Email:</strong> ".$email;
    $contenido .= "<br><strong>Asunto: </strong>".$asunto."<br><strong>Mensaje:</strong> ".$mensaje;

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();                                                 // Se envia con SMTP
        $mail->Host       = 'smtp.mailtrap.io';                           // Servidor con el que se envia el mensaje
        $mail->SMTPAuth   = true;                                      // Activar la verificación SMTP
        $mail->Username   = '8112f7ee335f97';                    // SMTP usuario
        $mail->Password   = '18d98ba65c6ea8';                             // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($email, $nombre);
        $mail->addAddress('luis@blueterrier.mx', 'Contacto');     // Add a recipient
        // $mail->addCC('artetlayolli@hotmail.com');
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje del contacto '.$nombre;
        $mail->Body    = $contenido;

        $mail->send();
        return print(json_encode('enviado'));
    } catch (Exception $e) {
        return print(json_encode('error'));
    }
}else{
    return print(json_encode('error'));
}
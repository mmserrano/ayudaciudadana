<?php
require('PHPMailer/class.phpmailer.php');
require('PHPMailer/class.smtp.php');

$mail = new PHPMailer(true);

try {
    // Configuración del servidor
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->isHTML(true);
    $mail->Host = "smtp.servidor-correo.net";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = "contacto@ayudaciudadana.info";
    $mail->Password = "MT*h4S+Eg+gQCYe"; 

    // Remitente y destinatario
    $mail->setFrom($email, 'Ayuda CiudaDANA');
    $mail->addAddress('ayudaciudadana.ia@gmail.com');

    // Contenido del correo
    //$mail->isHTML(false);
    $mail->Subject = 'Nueva Colaboración';
    $mail->Body    = "Nombre: $name\nCorreo Electrónico: $email\nTeléfono: $phone\n¿Cómo deseas colaborar?: $collaboration\n$other_collaboration\nHoras semanales: $hours\nComentarios:$comments";
    $mail->AltBody = "Nombre: $name\nCorreo Electrónico: $email\nTeléfono: $phone\n¿Cómo deseas colaborar?: $collaboration\n$other_collaboration\nHoras semanales: $hours\nComentarios:$comments";

    $mail->send();
    header('Location: gracias.html');
    exit();
} catch (Exception $e) {
    echo '<p>Algo ha fallado. Por favor, envía un correo directamente a <a href="mailto:ayudaciudadana.ia@gmail.com">ayudaciudadana.ia@gmail.com</a>.</p>';
}
?>
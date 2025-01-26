<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $collaboration = $_POST['collaboration'];
    $other_collaboration = isset($_POST['other_collaboration']) ? $_POST['other_collaboration'] : '';
    $hours = $_POST['hours'];

    $to = 'ayudaciudadana.ia@gmail.com';
    $subject = 'Nueva Colaboración';
    $message = "Nombre: $name\nCorreo Electrónico: $email\nTeléfono: $phone\n¿Cómo deseas colaborar?: $collaboration\n$other_collaboration\nHoras semanales: $hours\nComentarios:%comments";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        header('Location: gracias.html');
        exit();
    } else {
        echo '<p>Algo ha fallado. Por favor, envía un correo directamente a <a href="mailto:ayudaciudadana.ia@gmail.com">ayudaciudadana.ia@gmail.com</a>.</p>';
    }
} else {
    echo '<p>Método de solicitud no permitido.</p>';
}
?>
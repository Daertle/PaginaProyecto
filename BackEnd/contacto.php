<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require_once 'Gestion de Usuarios/Controlador.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'diamondglorydevelopment2@gmail.com';
        $mail->Password = 'jddo wbzv zxna tujd';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom( $correo, $nombre);
        $mail->addAddress('grupongcl@gmail.com'); 

        // Content
        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = 'Nombre: ' . $nombre . '<br>Email: ' . $correo . '<br><br>Mensaje: <br>' . nl2br($mensaje);

        $mail->send();
        echo '
        <div class="alert alert-success alert-dismissible fade show result" role="alert">
            El mensaje ha sido enviado exitosamente.
        </div>
        ';
    } catch (Exception $e) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show result" role="alert">
            No se pudo enviar el mensaje. Error: ' . $mail->ErrorInfo . '
        </div>
        ';
    }
} else {
    echo '
    <div class="alert alert-danger alert-dismissible fade show result" role="alert">
        Por favor complete el formulario.
    </div>
    ';
}


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require_once 'Gestion de Usuarios/Controlador.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $controla = new Controlador();
    $alumnos = $controla->traerTablaAlumnos();
    $instructores = $controla->traerTablaInstructores();
    $administradores = $controla->traerTablaAdministradores();
    $usuario = null;
    $password = generar_password();

    foreach ($alumnos as $alumno) {
        if ($alumno['correo'] == $email) {
            $usuario = $alumno['username'];
            $documento = $alumno['documentoAlumno'];
            if ($documento) {
                $controla->modificarAlumno($documento, 'passwrd', $password); // Cambiado a modificarAlumno
            }
            break;
        }
    }

    if ($usuario == null) {
        foreach ($instructores as $instructor) {
            if ($instructor['correo'] == $email) {
                $usuario = $instructor['username'];
                $documento = $instructor['documentoInstructor'];
                if ($documento) {
                    $controla->modificarInstructor($documento, 'passwrd', $password);
                }
                break;
            }
        }
    }

    if ($usuario == null) {
        foreach ($administradores as $administrador) {
            if ($administrador['correo'] == $email) {
                $usuario = $administrador['username'];
                $documento = $administrador['documentoAdmin'];
                if ($documento) {
                    $controla->modificarAdministrador($documento, 'passwrd', $password);
                }
                break;
            }
        }
    }
}
if ($usuario) {
    // Crear una instancia de PHPMailer
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'diamondglorydevelopment2@gmail.com';
        $mail->Password = 'jddo wbzv zxna tujd';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('diamondglorydevelopment2@gmail.com', 'Diamond Glory Development');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = 'Username: ' . $usuario . '<br>Password: ' . $password;

        $mail->send();
        echo '
        <div class="alert alert-success alert-dismissible fade show resultIn" role="alert">
            El mensaje ha sido enviado exitosamente.

            <a href="../../../../frontend/html/guestView/spanish/login.html.php"><button type="button" class="btn btn-outline-success">Volver</button></a>
            </div>
        ';
    } catch (Exception $e) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show resultIn" role="alert">
            No se pudo enviar el mensaje. Error: ' . $mail->ErrorInfo . '
            <a href="../../../../frontend/html/guestView/spanish/login.html.php"><button type="button" class="btn btn-outline-danger">Volver</button></a>
        </div>
        ';
    }
} else {
    echo '
    <div class="alert alert-danger alert-dismissible fade show resultIn" role="alert">
        No se encontró un usuario con ese correo electrónico.
         <a href="../../../../frontend/html/guestView/spanish/login.html.php"><button type="button" class="btn btn-outline-danger">Volver</button></a>
    </div>
    ';
}

function generar_password()
{
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    $max_index = strlen($caracteres) - 1;

    for ($i = 0; $i < 12; $i++) {
        $password .= $caracteres[random_int(0, $max_index)];
    }

    return $password;
}

?>
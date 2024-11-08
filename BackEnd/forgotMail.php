<?php
//Import PHPMailer classes into the global namespace
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
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'diamondglorydevelopment2@gmail.com';                     //SMTP username
        $mail->Password = 'jddo wbzv zxna tujd';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('diamondglorydevelopment2@gmail.com', 'Diamond Glory Development');
        $mail->addAddress($email);     //Add a recipient from the form

        //Contents
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reset Request';
        $mail->Body = 'Username: ' . $usuario . '<br>Password: ' . $password;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'No se encontró un usuario con ese correo electrónico';
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

header('Location: ../Frontend/html/guestView/spanish/login.html.php');
?>
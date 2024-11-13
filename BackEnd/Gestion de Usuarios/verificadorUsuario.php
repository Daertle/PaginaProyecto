<?php
require_once 'Controlador.php';
$controla = new Controlador();
$usuarioUsername = $_POST['username'];
$comprobante = false;

$alumnos = $controla->traerTablaAlumnos();
$instructores = $controla->traerTablaInstructores();
$administradores = $controla->traerTablaAdministradores();

foreach ($alumnos as $alumno) {
    if ($alumno['username'] == $usuarioUsername) {
        $comprobante = true;
        break;
    }
}

foreach ($instructores as $instructor) {
    if ($instructor['username'] == $usuarioUsername) {
        $comprobante = true;
        break;
    }
}

foreach ($administradores as $administrador) {
    if ($administrador['username'] == $usuarioUsername) {
        $comprobante = true;
        break;
    }
}
error_log("Comprobante: " . json_encode($comprobante));
header('Content-Type: application/json');
echo json_encode($comprobante);
exit;
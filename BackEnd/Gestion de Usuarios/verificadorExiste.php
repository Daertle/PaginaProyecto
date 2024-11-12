<?php
require_once 'Controlador.php';
$controla = new Controlador();
$usuarioCedula = $_POST['cedula'];
$comprobante = false;

$alumnos = $controla->traerTablaAlumnos();
$instructores = $controla->traerTablaInstructores();
$administradores = $controla->traerTablaAdministradores();

foreach ($alumnos as $alumno) {
    if ($alumno['documentoAlumno'] == $usuarioCedula) {
        $comprobante = true;
        break;
    }
}

foreach ($instructores as $instructor) {
    if ($instructor['documentoInstructor'] == $usuarioCedula) {
        $comprobante = true;
        break;
    }
}

foreach ($administradores as $administrador) {
    if ($administrador['documentoAdmin'] == $usuarioCedula) {
        $comprobante = true;
        break;
    }
}
error_log("Comprobante: " . json_encode($comprobante));
header('Content-Type: application/json');
echo json_encode($comprobante);
exit;
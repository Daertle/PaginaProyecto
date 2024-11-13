<?php
session_start();
require_once 'Controlador.php';

$controla = new Controlador();

$usuario = $_SESSION['usuario']; // Asumiendo que el nombre de usuario está almacenado en la sesión
$dato = $_POST['campo'];
$nuevo = $_POST['valor'];

// Obtener el documento del usuario basado en el nombre de usuario
$documento = $controla->seleccionarDocumentoUsuarioArray($usuario);

// Verificar el tipo de usuario y llamar a la función correspondiente
if ($controla->esAlumno($documento)) {
    $controla->modificarAlumno($documento, $dato, $nuevo);
} elseif ($controla->esInstructor($documento)) {
    $controla->modificarInstructor($documento, $dato, $nuevo);
} elseif ($controla->esAdministrador($documento)) {
    $controla->modificarAdministrador($documento, $dato, $nuevo);
}

echo 'success';
?>
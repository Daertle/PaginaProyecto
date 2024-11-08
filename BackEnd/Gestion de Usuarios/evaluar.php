<?php
require_once "../../../../BackEnd/Gestion de Usuarios/Controlador.php";

$controlador = new Controlador();
$puntuacion = 0;

// Recorrer cada respuesta enviada por el formulario
foreach ($_POST as $id_pregunta => $respuesta_usuario) {
    // Obtenemos el ID de la pregunta quitando el prefijo 'pregunta'
    $id_pregunta = str_replace('pregunta', '', $id_pregunta);

    // Obtener la respuesta correcta de la base de datos
    $respuesta_correcta = $controlador->obtenerRespuestaCorrecta($id_pregunta);

    // Comparar la respuesta del usuario con la correcta
    if ($respuesta_correcta == $respuesta_usuario) {
        $puntuacion++;
    }
}

echo "Tu puntuación es: " . $puntuacion . "/30";
?>
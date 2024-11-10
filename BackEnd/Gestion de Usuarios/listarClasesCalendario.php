<?php
session_start();
require_once 'Controlador.php';
$controla = new Controlador();

    $usuario = $_SESSION['usuario'];
    $fechaHora = $controla->traerCursoUsuario($usuario);

    $eventos = [];
    foreach ($fechaHora as $clase) {
        if (isset($clase['fecha']) && isset($clase['hora'])) {
            $eventos[] = [
                'title' => 'Clase agendada',
                'start' => $clase['fecha'] . 'T' . $clase['hora'],
                'end' => $clase['fecha'] . 'T' . date('H:i', strtotime($clase['hora'] . ' +50 minutes')),
                'allDay' => false,
                'color' => 'green'
            ];
        }
    }

    echo json_encode($eventos);


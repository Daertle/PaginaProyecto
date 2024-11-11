<?php

require_once 'Controlador.php';
$controla = new Controlador();

$ingresos =  $controla->seleccionarSumaPrecioCursosAnioActual(); 
echo json_encode($ingresos);

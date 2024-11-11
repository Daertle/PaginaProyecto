<?php

require_once 'Controlador.php';
$controla = new Controlador();

$usuario = $_SESSION['usuario'];

$arreglo =  $controla->CursosAlumnos($usuario); 
echo json_encode($arreglo);

?>
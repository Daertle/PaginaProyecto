<?php

require_once 'Controlador.php';
$controla = new Controlador();

$usuario = $_SESSION['usuario'];
var_dump($usuario);

$arreglo =  $controla->CursosInstructor($usuario); 
echo json_encode($arreglo);

?>
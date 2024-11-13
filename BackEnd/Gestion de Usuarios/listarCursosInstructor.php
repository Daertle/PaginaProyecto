<?php
session_start();
require_once 'Controlador.php';
$controla = new Controlador();

$usuario = $_SESSION['usuario'];

$arreglo =  $controla->CursosInstructor($usuario); 
echo json_encode($arreglo);

?>
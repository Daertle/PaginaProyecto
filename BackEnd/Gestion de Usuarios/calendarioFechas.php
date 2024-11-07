<?php

require_once 'Controlador.php';

$controla = new Controlador();

$usuario = $_POST['usuario'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$controla->modificarClaseFecha($usuario, $fecha, $hora);

?>
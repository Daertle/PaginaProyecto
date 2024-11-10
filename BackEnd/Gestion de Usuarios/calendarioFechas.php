<?php
session_start();
require_once 'Controlador.php';

$controla = new Controlador();

$usuario = $_SESSION['usuario'];

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

var_dump($usuario, $fecha, $hora); // debugging

$controla->modificarClaseFecha($usuario, $fecha, $hora);

?>
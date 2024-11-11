<?php
require_once 'Controlador.php';
$controla = new Controlador();
$id = $_POST['dato'];  

$controla->bajaPDF($id)

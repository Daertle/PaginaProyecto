<?php
require_once 'Controlador.php';
$controla = new Controlador();

$archivosPDF = $controla->seleccionarPDF(); 

echo json_encode($archivosPDF);

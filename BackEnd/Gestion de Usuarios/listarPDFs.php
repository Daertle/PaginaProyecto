<?php
require_once 'Controlador.php';
$controla = new Controlador();

$archivosPDF = $controla->traerTablaPDF(); 

echo json_encode($archivosPDF);
<?php

$cedula = $_POST['cedula'];
$comprobante;

if ($cedula == '11111111') {
    $comprobante = false;
} else {	

$cedula_array = str_split($cedula);

$a = $cedula_array[0]*2;
$b = $cedula_array[1]*9;
$c = $cedula_array[2]*8;
$d = $cedula_array[3]*7;
$e = $cedula_array[4]*6;
$f = $cedula_array[5]*3;
$g = $cedula_array[6]*4;
$h = $cedula_array[7];

$suma = $a + $b + $c + $d + $e + $f + $g;
$resto = $suma % 10;
$verificador = (10 - $resto) %10;

if ($verificador == $h) {
    $comprobante = true;
} else {
    $comprobante = false;    
}
}
echo json_encode($comprobante);
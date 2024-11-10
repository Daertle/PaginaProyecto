<?php
session_start();
require_once 'BaseDatos.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $username = $_POST['username'];

    $base = new BaseDatos();
    $usuario = $base->logueo($username, $password);

    if ($usuario > 0) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
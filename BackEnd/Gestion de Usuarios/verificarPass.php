<?php
session_start();
require_once 'Controlador.php';

$controla = new Controlador();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $username = $_POST['username'];

    $usuario = $controla->logInDirecto($username, $password);

    if ($usuario > 0) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
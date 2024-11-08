<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "<script>alert('Debe iniciar sesión para acceder a esta página.'); window.location.href='../../guestView/spanish/login.html.php';</script>";
    exit();
} else {
    if ($_SESSION['permisos'] < 1) {
        echo "<script>alert('No tiene permisos para acceder a esta página.'); window.location.href='../../guestView/spanish/login.html.php';</script>";
        exit();
    }
}
